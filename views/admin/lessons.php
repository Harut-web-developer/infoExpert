<!-- Harut-->
<input type="hidden" data-page='AcLessons' id="page">
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
                        <h4 class="box-title">Դասընթացներ
                            <span class="buttons">
                                          <span class="overlay show_" style="width:33px;"></span>
                                          <button class="btn btn-sm btn-default" id="editeLesson"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-sm btn-danger" id="disableLesson"><i class="fa fa-trash"></i></button>
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
                                                <th scope="col">Դասընթացի անվանում</th>
                                                <th scope="col">Դասեր</th>
                                                <th scope="col">Դասերի քանակ</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($lessons)){ ?>
                                                <?php foreach ($lessons as $lesson){ ?>
                                                    <tr data-id="<?php echo $lesson->id;?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($lesson->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $lesson->id;?></td>
                                                        <td scope="col"><?php echo $lesson->lesson_name_am;?></td>
                                                        <td scope="col">
                                                            <a href="/admin/video-lessons?id=<?=$lesson->id?>">Վիդեոդասեր</a>
                                                        </td>
                                                        <td scope="col"><?php echo $lesson->lessons_count;?></td>
                                                        <td scope="col">
                                                            <?php if($lesson->status == 1){
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
                    <h5 class="modal-title" id="addnew">Ավելացնել դասընթաց</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                        <div class="row">
                            <div class="col-sm-12">
                                <span style="margin-bottom: 4px;color: #878787;">Դասընթաց</span>
                                <input type="file" name="img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <span style="margin-bottom: 4px;color: #878787;">Սերտիֆիկատ</span>
                                <input type="file" name="certificate_img">
                            </div>
                        </div>
                        <br>
<!--                        <div class="col-sm-12">-->
                            <span style="margin-bottom: 4px;">Վարկանիշ</span>
                            <div>
                                <input id="see" type="radio" value="1" name="rating_exist" checked>
                                <label for="see">Երևա</label>
                                <input style="margin-left: 5px" id="noSee" type="radio" value="0" name="rating_exist">
                                <label for="noSee">Չերևա</label>
                            </div>
<!--                        </div>-->
                        <span>Գին</span>
                        <input type="number" name="AcLessons[price]" required placeholder="Գին" class="form-control">
                        <span>Դասընթացի քանակ (առանց քննության)</span>
                        <input type="number" name="AcLessons[lessons_count]" required  placeholder="Դասընթացի քանակ" class="form-control">
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
                                        <span>Անուն</span>
                                        <input type="text" name="AcLessons[lesson_name_am]" required placeholder="Անուն" class="form-control">
                                        <span>Դասընթացի տևողություն</span>
                                        <input type="text" name="AcLessons[lesson_title_am]"   placeholder="Դասընթացի տևողություն" class="form-control">
                                        <span>Սերտիֆիկատի մասին</span>
                                        <input type="text" name="AcLessons[lesson_certificate_am]"   placeholder="Սերտիֆիկատի մասին" class="form-control">
                                        <span>Բանալի Բառեր</span>
                                        <textarea name="AcLessons[lesson_keywords_am]" class="form-control" placeholder="Բանալի Բառեր" rows="3"></textarea>
                                        <span>Պարունակություն</span>
                                        <textarea name="AcLessons[lesson_content_am]" class="form-control" id="editor_am" placeholder="Պարունակություն" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-product-ru" role="tabpanel" aria-labelledby="custom-nav-product-ru-tab">
                                    <div class="form-group">
                                        <span>Անուն</span>
                                        <input type="text" name="AcLessons[lesson_name_ru]"   placeholder="Անուն" class="form-control">
                                        <span>Դասընթացի տևողություն</span>
                                        <input type="text" name="AcLessons[lesson_title_ru]"   placeholder="Դասընթացի տևողություն" class="form-control">
                                        <span>Սերտիֆիկատի մասին</span>
                                        <input type="text" name="AcLessons[lesson_certificate_ru]"   placeholder="Սերտիֆիկատի մասին" class="form-control">
                                        <span>Բանալի Բառեր</span>
                                        <textarea name="AcLessons[lesson_keywords_ru]" class="form-control" placeholder="Բանալի Բառեր" rows="3"></textarea>
                                        <span>Պարունակություն</span>
                                        <textarea name="AcLessons[lesson_content_ru]" class="form-control"  id="editor_ru" placeholder="Պարունակություն" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-product-en" role="tabpanel" aria-labelledby="custom-nav-product-en-tab">
                                    <div class="form-group">
                                        <span>Անուն</span>
                                        <input type="text" name="AcLessons[lesson_name_en]"   placeholder="Անուն" class="form-control">
                                        <span>Դասընթացի տևողություն</span>
                                        <input type="text" name="AcLessons[lesson_title_en]"   placeholder="Դասընթացի տևողություն" class="form-control">
                                        <span>Սերտիֆիկատի մասին</span>
                                        <input type="text" name="AcLessons[lesson_certificate_en]"   placeholder="Սերտիֆիկատի մասին" class="form-control">
                                        <span>Բանալի Բառեր</span>
                                        <textarea name="AcLessons[lesson_keywords_en]" class="form-control" placeholder="Բանալի Բառեր" rows="3"></textarea>
                                        <span>Պարունակություն</span>
                                        <textarea name="AcLessons[lesson_content_en]" class="form-control"  id="editor_en" placeholder="Պարունակություն" rows="3"></textarea>
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