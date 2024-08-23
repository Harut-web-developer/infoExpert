<?php

namespace app\controllers;

use app\models\AcLessons;
use app\models\AcMyCard;
use app\models\AcOrders;
use app\models\AcOrdersItems;
use app\models\AcWishlist;
use Yii;
use app\models\Texts;

class MyCardController extends \yii\web\Controller
{
    public static function pages()
    {
        $page['index'] = 11;
        $page['checkout'] = 12;
        $page['congratulation'] = 13;
        return $page;
    }
    public function beforeAction($action)
    {
        // Harut 50 ev Mariam 50
        if (!isset($_COOKIE['language']) || empty($_COOKIE['language'])) {
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $lng = $_COOKIE['language'] ?? 'en';
        if($lng !== 'am' && $lng !== 'ru' && $lng !== 'en'){
            setcookie('language', 'am', time() + (365 * 24 * 60 * 60));
            $this->refresh();
            Yii::$app->end();
            return false;
        }
        $pId = self::pages();
        $txt = Texts::find()
            ->select(['text_'.$lng.' as text']);
        if(@$pId[Yii::$app->controller->action->id]){
            $txt->where(['page_id' => $pId[Yii::$app->controller->action->id]]);
        }
        $txt = $txt->orWhere(['is','page_id' ,null ])
            ->asArray()
            ->indexBy('slug')
            ->column();

        $GLOBALS['text'] = $txt;
        $this->enableCsrfValidation = false;
        $session = Yii::$app->session;
        if ($action->id !== 'login' && !(isset($session['user_id']) && $session['logged'])) {
            return $this->redirect('/login');
        }
        else if ($action->id == 'login' && !(isset($session['user_id']) && $session['logged'])) {
            return $this->actionLogin();
        }
        if(!$session['user_name']){
            $this->redirect('/logout');
        }
        return parent::beforeAction($action);
    }
    public function actionIndex()
    {
        // Harut
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
        $my_card = AcLessons::find()->select('ac_lessons.id as lesson_id, ac_lessons.img as img, ac_lessons.price as price, ac_lessons.rating as rating,
        ac_my_card.id as my_card_id,lesson_name_'.$language.' as lesson_name, lesson_title_'.$language.' as lesson_title,
        lesson_certificate_'.$language.' as lesson_certificate')
            ->leftJoin('ac_my_card', 'ac_my_card.lessons_id = ac_lessons.id')
            ->where(['and',['ac_my_card.status' => '1'],['ac_my_card.user_id' => $user_id],])
            ->asArray()
            ->all();
        return $this->render('index',[
            'my_card' => $my_card
        ]);
    }
    public function actionCheckout()
    {
        // Harut
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
            if ($this->request->isPost){
                date_default_timezone_set("Asia/Yerevan");
                $post = $this->request->post();
                if (!empty($post['lesson_id'])){
                    $orders = new AcOrders();
                    $orders->user_id = $user_id;
                    $orders->total_price = array_sum($post['price']);
                    $orders->create_date = date('Y-m-d H:i:s');
                    $orders->save();
                    for ($k = 0; $k < count($post['lesson_id']); $k++){
                        $order_items = new AcOrdersItems();
                        $order_items->order_id = $orders->id;
                        $order_items->lesson_id = $post['lesson_id'][$k];
                        $order_items->price = $post['price'][$k];
                        $order_items->create_date = date('Y-m-d H:i:s');
                        $order_items->save();
                        $my_card = AcMyCard::findOne(['user_id' => $user_id,'lessons_id' => $order_items->lesson_id]);
                        $my_card->delete();
                    }

                    if($orders->status == 1){
                        $lang = 'am';
                        $main_price = 1;
                        $url = 'https://pg.inecoecom.am/payment/rest/register.do';
                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

                        $data = 'userName=******&password=******'
                            . '&amount=' . ($main_price * 100) // ($orders->total_price * 100)
                            . '&currency=051&language=' . $lang
                            . '&orderNumber=' . $orders->id
                            . '&returnUrl=infoexpert.am/my-card/ineco-order&jsonParams={"adanasOrder":' . $orders->id .
                            '}&pageView=' . 'MOBILE';

                        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                        $result = curl_exec($curl);
                        curl_close($curl);
                        $result = json_decode($result);

//                        if(isset($result->orderId)){
//                            $order->ineco_order_id = $result->orderId;
//                            $order->ineco_form_url = $result->formUrl;
//                            $order->save();
//                        }
//                        header("Location:".$result->formUrl);
//                        die;
                    }


                    $this->redirect('/my-card/index');
                }
            }
            if ($this->request->get('lesson_id')){
                $lesson_id = intval($this->request->get('lesson_id'));
                $lessons = AcLessons::find()->select('id as lesson_id, img, price, lesson_name_'.$language.' as lesson_name')
                    ->where(['status' => '1'])
                    ->andWhere(['ac_lessons.id' => $lesson_id]);
            }else{
                $lessons = AcMyCard::find()->select('ac_lessons.id as lesson_id, img, price, lesson_name_'.$language.' as lesson_name')
                    ->leftJoin('ac_lessons', 'ac_lessons.id = ac_my_card.lessons_id')
                    ->where(['and',['ac_my_card.status' => '1'],['ac_my_card.user_id' => $user_id]]);
            }
        $lessons = $lessons->asArray()->all();
        return $this->render('checkout',[
            'lessons' => $lessons
        ]);
    }
    public function actionCongratulation()
    {
        // Mariam
        return $this->render('congratulation-on-achievement-messages');
    }
    public function actionAddCard(){
        // Harut ev Mariam
        if ($this->request->isGet){
            $id = intval($this->request->get('lesson_id'));
            $add_card = AcMyCard::addCard($id);
            if ($add_card){
                if($_COOKIE['language'] == 'am'){
                    $message = 'Դասընթացն ավելացված է զամբյուղում։';
                }elseif ($_COOKIE['language'] == 'ru'){
                    $message = 'Курс добавлен в корзину.';
                }elseif ($_COOKIE['language'] == 'en'){
                    $message = 'The course has been added to the cart.';
                }
            }else{
                if($_COOKIE['language'] == 'am'){
                    $message = 'Դասընթացն արդեն ավելացված է զամբյուղում։';
                }elseif ($_COOKIE['language'] == 'ru'){
                    $message = 'Курс уже добавлен в корзину.';
                }elseif ($_COOKIE['language'] == 'en'){
                    $message = 'The course has already been added to the cart.';
                }
            }
            return json_encode(['add_card' => $add_card, 'message' => $message]);
        }
    }
    public function actionRemoveItem(){
        // Harut
        if ($this->request->isGet){
            $id = intval($this->request->get('itemId'));
            $remove_item = AcMyCard::findOne($id);
            $remove_item->delete();
            if($_COOKIE['language'] == 'am'){
                $message = 'Դասընթացներ առկա չէ';
            }elseif ($_COOKIE['language'] == 'ru'){
                $message = 'Нет доступных курсов';
            }elseif ($_COOKIE['language'] == 'en'){
                $message = 'No courses available';
            }
            return json_encode(['result' => 'remove', 'message' => $message]);
        }
    }
    public function actionMoveItem(){
        // Harut
        if ($this->request->isGet) {
            $user_id = Yii::$app->user->identity->id;
            $id = intval($this->request->get('itemId'));
            $lesson_id = intval($this->request->get('lessonId'));
            $wishlist_lesson_exist = AcWishlist::find()
                ->where(['and',['product_id' => $lesson_id],['type' => '1'],['active' => '1'],['status' => '1'],['user_id' => $user_id]])
                ->exists();
            if (!$wishlist_lesson_exist){
                $add_wishlist = new AcWishlist();
                $add_wishlist->user_id = $user_id;
                $add_wishlist->product_id = $lesson_id;
                $add_wishlist->type = '1';
                $add_wishlist->active = '1';
                $add_wishlist->create_date = date('Y-m-d H:i:s');
                $add_wishlist->save();
                $delete_card = AcMyCard::findOne($id);
                $delete_card->delete();
                if($_COOKIE['language'] == 'am'){
                    $message = 'Դասընթացներ առկա չէ';
                }elseif ($_COOKIE['language'] == 'ru'){
                    $message = 'Нет доступных курсов';
                }elseif ($_COOKIE['language'] == 'en'){
                    $message = 'No courses available';
                }
                return json_encode(['result' => 'moveAndDelete', 'message' => $message]);
            }else{
                $delete_card = AcMyCard::findOne($id);
                $delete_card->delete();
                if($_COOKIE['language'] == 'am'){
                    $message = 'Դասընթացներ առկա չէ';
                }elseif ($_COOKIE['language'] == 'ru'){
                    $message = 'Нет доступных курсов';
                }elseif ($_COOKIE['language'] == 'en'){
                    $message = 'No courses available';
                }
                return json_encode(['result' => 'delete', 'message' => $message]);
            }
            return false;
        }
    }
//    public function actionOrder(){
//
//        if ($post['payment_type'] == 2) {// Ineco
//            $lang = 'am';
//            $main_price = 1;
////                $main_price = 1;
//            $url = 'https://pg.inecoecom.am/payment/rest/register.do';
//            $curl = curl_init($url);
//            curl_setopt($curl, CURLOPT_POST, true);
//            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//
//            $data = 'userName=******&password=******'
//                . '&amount=' . ($main_price * 100)
//                . '&currency=051&language=' . $lang
//                . '&orderNumber=' . $order->id
//                . '&returnUrl=adanas.am/site/ineco-order&jsonParams={"adanasOrder":' . $order->id .
//                '}&pageView=' . 'MOBILE';
//
//            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//            $result = curl_exec($curl);
//            curl_close($curl);
//            $result = json_decode($result);
//
//            if(isset($result->orderId)){
//                $order->ineco_order_id = $result->orderId;
//                $order->ineco_form_url = $result->formUrl;
//                $order->save();
//            }
//            header("Location:".$result->formUrl);
//            die;
//        }
//    }
//    public function actionInecoOrder()    {
//        if (isset($_REQUEST)) {
//            $log = "\n------------------------\n";
//            $log .= date("Y.m.d G:i:s") . "\n";
//            $log .= print_r($_REQUEST, 1);
//            file_put_contents(Yii::getAlias('@app/web/ineco-response') , $log,FILE_APPEND);
//            $orderID = $_REQUEST['orderID'];
//            $paymentID = $_REQUEST['paymentID'];
//            if($orderID){
//                $order = FsOrders::findOne($orderID);
//                $order->ineco_payment_id = $_REQUEST['paymentID'];
//                $order->save();
//            }
//            if($orderID && $paymentID){
//                $url = 'https://pg.inecoecom.am/payment/rest/getOrderStatus.do';
//                $curl = curl_init($url);
//                curl_setopt($curl, CURLOPT_POST, true);
//                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//                $data = 'userName=*****&password=*****'
//                    . '&orderNumber=' . $orderID  . '&orderId=' . $paymentID;
//                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//                $result = curl_exec($curl);
//                curl_close($curl);
//                $result = json_decode($result);
//                if($result->orderStatus == 2 && $result->errorMessage === 'success'){//success
//                    $payed_sum = $result->amount / 100;
//                    if($payed_sum != $order->price){
//                        $order->payment_status = 2;
//                        Yii::$app->session->setFlash('error', 'Something went wrong with payment.');
//                    }else{
//                        $order->payment_status = 1;
//                    }
//                    $order->save();
//                }else{
//                    Yii::$app->session->setFlash('error', 'Something went wrong with payment.');
//                }            }
//        }
//        return $this->redirect('/');
//    }

    public function actionPayments(){
        $language = $_COOKIE['language'];
        $user_id = Yii::$app->user->identity->id;
        $payments = AcOrdersItems::find()
            ->select([
                'ac_lessons.lesson_name_' . $language . ' as lesson_name',
                'ac_orders_items.price as price',
                'DATE_FORMAT(ac_orders_items.create_date, "%Y-%m-%d") as create_date'
            ])
            ->leftJoin('ac_orders', 'ac_orders.id = ac_orders_items.order_id')
            ->leftJoin('ac_lessons', 'ac_lessons.id = ac_orders_items.lesson_id')
            ->where(['ac_orders_items.status' => '1'])
            ->andWhere(['ac_orders.status' => '1'])
            ->andWhere(['ac_orders.user_id' => $user_id])
            ->asArray()
            ->all();
        return $this->render('payments',[
            'payments' => $payments
        ]);
    }
}
