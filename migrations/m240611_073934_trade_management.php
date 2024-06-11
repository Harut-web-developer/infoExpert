<?php

use yii\db\Migration;

/**
 * Class m240611_073934_trade_management
 */
class m240611_073934_trade_management extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('texts', [
            'slug' => 'questionQuize',
            'text_am' => 'Ինչպե՞ս է կոչվում «1C: ԱռևՎտրի կառավարում» հիմնական կոնֆիգուրացիան, որը պարունակում է համակարգի հիմնական կարգավորումներն ու ֆունկցիոնալությունը:',
            'text_ru' => 'Как называется «1С»? Базовая конфигурация «Управление торговлей», содержащая основные настройки и функционал системы.',
            'text_en' => 'What is the name of "1C? "Trade Management" basic configuration, which contains the basic settings and functionality of the system.',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize2',
            'text_am' => 'Ձեռնարկությունների կառավարում',
            'text_ru' => 'Управление предприятием',
            'text_en' => 'Enterprise management',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize3',
            'text_am' => 'Մարդկային ռեսուրսների կառավարում',
            'text_ru' => 'Управление человеческими ресурсами',
            'text_en' => 'Human resource management',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize4',
            'text_am' => '1С: Աշխատավարձ և կադրերի կառավարում',
            'text_ru' => '1С: Расчет заработной платы и управление персоналом',
            'text_en' => '1С: Payroll and personnel management',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'questionQuize2',
            'text_am' => 'Բիզնեսի ո՞ր ոլորտներում կարող է առավել օգտակար լինել «1C: Առևվտրի կառավարումը»։',
            'text_ru' => 'В каких сферах бизнеса «1С» может быть наиболее полезна? Управление торговлей».',
            'text_en' => 'In which areas of business can "1C" be most useful? Trade management.',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize5',
            'text_am' => 'Շահույթի և վնասի մասին հաշվետվություն',
            'text_ru' => 'Отчет о прибылях и убытках',
            'text_en' => 'Profit and Loss Statement',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize6',
            'text_am' => 'Շրջանառու միջոցների վերլուծություն',
            'text_ru' => 'Анализ оборотного капитала',
            'text_en' => 'Analysis of working capital',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize7',
            'text_am' => 'Ֆինանսական վահանակներ և հաշվետվություններ',
            'text_ru' => 'Финансовые панели и отчеты',
            'text_en' => 'Financial dashboards and reports',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize8',
            'text_am' => 'Վերը նշված բոլոր պատասխանները ճիշտ են',
            'text_ru' => 'Все вышеперечисленные ответы верны',
            'text_en' => 'All of the above answers are correct',
            'page_id' => null,
        ]);
        $this->insert('texts', [
            'slug' => 'questionQuize3',
            'text_am' => '«1C: ԱռևՎտրի կառավարում» ծրագրի ո՞ր բաժինն է պատասխանատու պահեստային պաշարների կառավարման ևՎ ապրանքների առաքման համար։',
            'text_ru' => '«1С: Какой отдел управления торговлей отвечает за управление запасами и доставку продукции?',
            'text_en' => '"1C: Which department of Trade Management is responsible for inventory management and product delivery?',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize9',
            'text_am' => 'Մանրածախ առևտուր',
            'text_ru' => 'Розничная торговля',
            'text_en' => 'Retail trade',
            'page_id' => null,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize10',
            'text_am' => 'Մեծածախ առևտուր',
            'text_ru' => 'Оптовая торговля',
            'text_en' => 'Wholesale trade',
            'page_id' => null,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize11',
            'text_am' => 'Ծառայություններ',
            'text_ru' => 'Услуги',
            'text_en' => 'Services',
            'page_id' => null,
        ]);
        $this->insert('texts', [
            'slug' => 'questionQuize4',
            'text_am' => 'Ի՞նչ գործիքներ է տրամադրում «1C: Առևտրի կառավարում»-ը ընկերության ֆինանսական կատարողականը վերլուծելու համար:',
            'text_ru' => 'Какие инструменты предоставляет 1С? Управление торговлей» для анализа финансовых показателей компании.',
            'text_en' => 'What tools does 1C provide? Trade Management` to analyze the company`s financial performance.',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize12',
            'text_am' => 'Շահույթի և վնասի մասին հաշվետվություն',
            'text_ru' => 'Отчет о прибылях и убытках',
            'text_en' => 'Profit and Loss Statement',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize13',
            'text_am' => 'Շրջանառու միջոցների վերլուծություն',
            'text_ru' => 'Анализ оборотного капитала',
            'text_en' => 'Analysis of working capital',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'btnQuize',
            'text_am' => 'Ֆինանսական վահանակներ և հաշվետվություններ',
            'text_ru' => 'Финансовые панели и отчеты',
            'text_en' => 'Financial dashboards and reports',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'questionQuize5',
            'text_am' => 'Ի՞նչ է պահանջվում լրացնել «Ապրանքների ձեռքբերում» նոր փաստաթուղթ ստեղծելիս:',
            'text_ru' => 'Что необходимо заполнить при создании нового документа «Приобретение товаров»?',
            'text_en' => 'What is required to be filled in when creating a new document "Acquisition of Goods"?',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize14',
            'text_am' => 'Միայն ապրանքի անվանումը',
            'text_ru' => 'Только название продукта',
            'text_en' => 'Product name only',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize15',
            'text_am' => 'Ստացման ամսաթիվը և գումարը',
            'text_ru' => 'Дата получения и сумма',
            'text_en' => 'Date of receipt and amount',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize16',
            'text_am' => 'Ապրանքի քանակն ու գինը',
            'text_ru' => 'Количество и цена товара',
            'text_en' => 'Product quantity and price',
            'page_id' => 25,
        ]);
        $this->insert('texts', [
            'slug' => 'answerQuize17',
            'text_am' => 'Կապալառու և պահեստ',
            'text_ru' => 'Подрядчик и склад',
            'text_en' => 'Contractor and warehouse',
            'page_id' => 25,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240611_073934_trade_management cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240611_073934_trade_management cannot be reverted.\n";

        return false;
    }
    */
}
