<!-- Mariam-->
<input type="hidden" data-page='AcHaveQuestions' id="page">
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
                        <h4 class="box-title">Հարցեր
                            <span class="buttons">
                              <span class="overlay show_" style="width:33px;"></span>
                              <button class="btn btn-sm btn-default" id="editeHaveQuestions"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-sm btn-danger" id="disableHaveQuestions"><i class="fa fa-trash"></i></button>
                            </span>
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
                                                <th scope="col">Անուն</th>
                                                <th scope="col">Էլ. հասցե</th>
                                                <th scope="col">Հարց</th>
                                                <th scope="col">Պատասխանել է</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($have_questions)){ ?>
                                                <?php foreach ($have_questions as $item){ ?>
                                                    <tr data-id="<?php echo $item->id;?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($item->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item->id;?></td>
                                                        <td scope="col">
                                                            <?php echo $item->name;?>
                                                        </td>
                                                        <td scope="col">
                                                            <input type="hidden" id="emailInput"value="<?= $item->email ?>">
                                                            <?php echo $item->email;?>
                                                        </td>
                                                        <td scope="col">
                                                            <input type="hidden" id="questionInput"value="<?= $item->question ?>">
                                                            <?php echo $item->question;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->checked_answer == 0){?>
                                                                <button id="sendEmailButton">Ուղարկել նամակ</button>
                                                                <input type="checkbox" class="checkedAnswerHaveQuestions">
                                                            <?php }?>
                                                            <?php if($item->checked_answer == 1){?>
                                                                <span><?=$item->adminName->username?></span>
                                                            <?php }?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->status == 1){
                                                                echo 'Ակտիվ';
                                                            } else {
                                                                echo 'Պասիվ';
                                                            };?>
                                                        </td>
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
                    <h5 class="modal-title" id="addnew">Ավելացնել շրջանավարտներ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                        <div class="row">
                            <div class="col-sm-12">
                                <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                                <input type="file" name="img">
                            </div>
                        </div>
                        <br>
                        <span>Linkdin-ի հղում</span>
                        <input type="text" name="AcAlumni[linkedin_link]"  placeholder="Հղում" class="form-control">
                        <br>
                        <div class="custom-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active show" id="custom-nav-product-am-tab" data-toggle="tab" href="#custom-nav-product-am" role="tab" aria-controls="custom-nav-product-am" aria-selected="true">Հայ</a>
                                    <a class="nav-item nav-link" id="custom-nav-product-ru-tab" data-toggle="tab" href="#custom-nav-product-ru" role="tab" aria-controls="custom-nav-product-ru" aria-selected="false">Ռուս</a>
                                    <a class="nav-item nav-link " id="custom-nav-product-en-tab" data-toggle="tab" href="#custom-nav-product-en" role="tab" aria-controls="custom-nav-product-en" aria-selected="false">Անգլ</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent"><br>
                                <div class="tab-pane fade active show" id="custom-nav-product-am" role="tabpanel" aria-labelledby="custom-nav-product-am-tab">
                                    <div class="form-group ">
                                        <span>Անվանում</span>
                                        <input type="text" name="AcAlumni[alumni_am]" required placeholder="Անուն" class="form-control">
                                        <span>Պարունակություն</span>
                                        <textarea name="AcAlumni[text_am]" class="form-control" id="editor_am" placeholder="Պարունակություն" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-product-ru" role="tabpanel" aria-labelledby="custom-nav-product-ru-tab">
                                    <div class="form-group">
                                        <span>Անվանում</span>
                                        <input type="text" name="AcAlumni[alumni_ru]" required placeholder="Անուն" class="form-control">
                                        <span>Պարունակություն</span>
                                        <textarea name="AcAlumni[text_ru]" class="form-control" id="editor_ru" placeholder="Պարունակություն" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-product-en" role="tabpanel" aria-labelledby="custom-nav-product-en-tab">
                                    <div class="form-group">
                                        <span>Անվանում</span>
                                        <input type="text" name="AcAlumni[alumni_en]" required placeholder="Անուն" class="form-control">
                                        <span>Պարունակություն</span>
                                        <textarea name="AcAlumni[text_en]" class="form-control" id="editor_en" placeholder="Պարունակություն" rows="3"></textarea>
                                    </div>
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
<script src="/web/ckfinder/ckfinder.js"></script>
<script src="/web/ckeditor/ckeditor.js"></script>

<script>

    var editor = CKEDITOR.replace( 'editor_am' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_ru = CKEDITOR.replace( 'editor_ru' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_ru, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_en = CKEDITOR.replace( 'editor_en' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_en, null, { type: 'Files', currentFolder: '/archive/' } );
</script>
<style>
    .is_types span{
        padding-right:10px;
    }
</style>
