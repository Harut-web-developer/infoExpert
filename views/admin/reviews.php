<input type="hidden" data-page='Stores' id="page">
<?php if(isset($_GET['success'])){ ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        Հաջողությամբ պահպանվեց
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <script>
        var url = window.location.href;
        url = url.split('?')[0];
        window.history.replaceState({}, document.title, url);
    </script>
<?php } ?>
<div class="products">
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="pages">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Կարծիքներ
                            <span class="buttons">
                              <button class="btn btn-sm btn-default" id="editeReview"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-sm btn-danger" id="disableReview"><i class="fa fa-trash"></i></button>
                            </span>
                            <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-succ fl" style="margin-left:10px;"><i class="bx bx-plus me-1"></i> Ավելացնել</a>
                        </h4>
                    </div>
                    <div class="card-body--">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tbl">
                                        <table class="table table-bordered ">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Կարծիք</th>
                                                <th scope="col">Գնահատական</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($reviews)){ ?>
                                                <?php foreach ($reviews as $review){ ?>
                                                    <tr data-id="<?php echo $review->id;?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($review->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $review->id;?></td>
                                                        <td scope="col"> <?php echo $review->text_am;?></td>
                                                        <td scope="col"> <?php echo $review->stars;?></td>
                                                        <td scope="col">
                                                            <?php if($review->status == 1){
                                                                echo 'Ակտիվ';
                                                            } else {
                                                                echo 'Պասիվ';
                                                            };?></td>
                                                    </tr>
                                                <?php }} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade add-new" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnew" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnew">Ավելացնել կարծիք</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                        <input type="text" name="AcReviews[stars]" required placeholder="ԳՆահատական 1-5" class="form-control">
                        <br>
                        <input type="text" name="AcReviews[url]"  placeholder="Հղում" class="form-control">
                        <br>
                        <select name="AcReviews[platform]" id="" class="form-control">
                            <option value="1">Linkedin</option>
                            <option value="2">Facebook</option>
                        </select>
                        <br>
                        <div class="custom-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active show" id="custom-nav-product-am-tab" data-toggle="tab" href="#custom-nav-product-am" role="tab" aria-controls="custom-nav-product-am" aria-selected="true">Հայ</a>
                                    <a class="nav-item nav-link" id="custom-nav-product-ru-tab" data-toggle="tab" href="#custom-nav-product-ru" role="tab" aria-controls="custom-nav-product-ru" aria-selected="false">Ռուս</a>
                                    <a class="nav-item nav-link " id="custom-nav-product-en-tab" data-toggle="tab" href="#custom-nav-product-en" role="tab" aria-controls="custom-nav-product-en" aria-selected="false">Անգլ</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade active show" id="custom-nav-product-am" role="tabpanel" aria-labelledby="custom-nav-product-am-tab">
                                    <div class="form-group ">
                                        <span>Ում կողմից</span>
                                        <input type="text" name="AcReviews[from_am]" required placeholder="Ում կողմից" class="form-control">
                                    </div>
                                    <div class="form-group ">
                                        <span>Կարծիք</span>
                                        <input type="text" name="AcReviews[text_am]" required placeholder="Անուն" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-product-ru" role="tabpanel" aria-labelledby="custom-nav-product-ru-tab">
                                    <div class="form-group ">
                                        <span>Ում կողմից</span>
                                        <input type="text" name="AcReviews[from_ru]" required placeholder="Ում կողմից" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <span>Կարծիք</span>
                                        <input type="text" name="AcReviews[text_ru]" required placeholder="Անուն" class="form-control"></div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-product-en" role="tabpanel" aria-labelledby="custom-nav-product-en-tab">
                                    <div class="form-group ">
                                        <span>Ում կողմից</span>
                                        <input type="text" name="AcReviews[from_en]" required placeholder="Ում կողմից" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <span>Կարծիք</span>
                                        <input type="text" name="AcReviews[text_en]" required placeholder="Անուն" class="form-control">   </div>
                                </div>
                            </div>

                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                        <button type="submit" class="btn btn-succ" name="add" value="true">Գրանցել</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="modals">

    </div>
</div>

<style>
    .is_types span{
        padding-right:10px;
    }
</style>
<?php
$f = 0;
function display_list($nested_categories, $type = 'sortable', $level = 0)
{
    foreach($nested_categories as $nested){
        $c ='';
        for ($i=0; $i < $level ; $i++) { $c = $c.'-';}
        $list .= '<option value="'.$nested['id'].'">'.$c.$nested['name'].' ('.$nested['atg'].')</option>';
        if( ! empty($nested['child'])){$list .= display_list($nested['child'],$type,$level+1);}
    }
    return $list;
}
?>