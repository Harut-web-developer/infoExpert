<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Դասընթաց ՝ <?php echo $lesson->lesson_name_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $lesson->id;?>">
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
                    <span>Գին</span>
                    <input type="number" name="AcLessons[price]" required placeholder="Գին" class="form-control">
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-lesson-am-tab" data-toggle="tab" href="#custom-nav-lesson-am" role="tab" aria-controls="custom-nav-lesson-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-lesson-ru-tab" data-toggle="tab" href="#custom-nav-lesson-ru" role="tab" aria-controls="custom-nav-lesson-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-lesson-en-tab" data-toggle="tab" href="#custom-nav-lesson-en" role="tab" aria-controls="custom-nav-lesson-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-lesson-am" role="tabpanel" aria-labelledby="custom-nav-lesson-am-tab">
                                <div class="form-group ">
                                    <span>Անուն</span>
                                    <input type="text" name="AcLessons[lesson_name_am]" value="<?php echo $lesson->lesson_name_am;?>" required placeholder="Անուն" class="form-control">
                                    <span>Դասընթացի տևողություն</span>
                                    <input type="text" name="AcLessons[lesson_title_am]" value="<?php echo $lesson->lesson_title_am;?>"   placeholder="Դասընթացի տևողություն" class="form-control">
                                    <span>Սերտիֆիկատի մասին</span>
                                    <input type="text" name="AcLessons[lesson_certificate_am]" value="<?php echo $lesson->lesson_certificate_am;?>"   placeholder="Սերտիֆիկատի մասին" class="form-control">
                                    <span>Բանալի Բառեր</span>
                                    <textarea name="AcLessons[lesson_keywords_am]" class="form-control" placeholder="Բանալի Բառեր" rows="3"><?php echo $lesson->lesson_keywords_am;?></textarea>
                                    <span>Պարունակություն</span>
                                    <textarea name="AcLessons[lesson_content_am]" class="form-control" id="editor_am_l" placeholder="Պարունակություն" rows="3"><?php echo $lesson->lesson_content_am;?></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-lesson-ru" role="tabpanel" aria-labelledby="custom-nav-lesson-ru-tab">
                                <div class="form-group">
                                    <span>Անուն</span>
                                    <input type="text" name="AcLessons[lesson_name_ru]" value="<?php echo $lesson->lesson_name_ru;?>"  placeholder="Անուն" class="form-control">
                                    <span>Դասընթացի տևողություն</span>
                                    <input type="text" name="AcLessons[lesson_title_ru]" value="<?php echo $lesson->lesson_title_ru;?>"  placeholder="Վերնագիր" class="form-control">
                                    <span>Սերտիֆիկատի մասին</span>
                                    <input type="text" name="AcLessons[lesson_certificate_ru]" value="<?php echo $lesson->lesson_certificate_ru;?>"   placeholder="Սերտիֆիկատի մասին" class="form-control">
                                    <span>Բանալի Բառեր</span>
                                    <textarea name="AcLessons[lesson_keywords_ru]" class="form-control" placeholder="Բանալի Բառեր" rows="3"><?php echo $lesson->lesson_keywords_ru;?></textarea>
                                    <span>Պարունակություն</span>
                                    <textarea name="AcLessons[lesson_content_ru]" class="form-control"  id="editor_ru_l" placeholder="Պարունակություն" rows="3"><?php echo $lesson->lesson_content_ru;?></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-lesson-en" role="tabpanel" aria-labelledby="custom-nav-lesson-en-tab">
                                <div class="form-group">
                                    <span>Անուն</span>
                                    <input type="text" name="AcLessons[lesson_name_en]" value="<?php echo $lesson->lesson_name_en;?>"  placeholder="Անուն" class="form-control">
                                    <span>Դասընթացի տևողություն</span>
                                    <input type="text" name="AcLessons[lesson_title_en]" value="<?php echo $lesson->lesson_title_en;?>"  placeholder="Վերնագիր" class="form-control">
                                    <span>Սերտիֆիկատի մասին</span>
                                    <input type="text" name="AcLessons[lesson_certificate_en]" value="<?php echo $lesson->lesson_certificate_en;?>"   placeholder="Սերտիֆիկատի մասին" class="form-control">
                                    <span>Բանալի Բառեր</span>
                                    <textarea name="AcLessons[lesson_keywords_en]" class="form-control" placeholder="Բանալի Բառեր" rows="3"><?php echo $lesson->lesson_keywords_en;?></textarea>
                                    <span>Պարունակություն</span>
                                    <textarea name="AcLessons[lesson_content_en]" class="form-control"  id="editor_en_l" placeholder="Պարունակություն" rows="3"><?php echo $lesson->lesson_content_en;?></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                    <button type="submit" class="btn btn-succ" name="edite" value="true">Գրանցել</button>
                </form>

            </div>

        </div>
    </div>
</div>
<script>
    jQuery('#editenew').modal('show');
</script>
<script src="/web/ckfinder/ckfinder.js"></script>
<script src="/web/ckeditor/ckeditor.js"></script>
<script>
    var editor_l = CKEDITOR.replace( 'editor_am_l' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_l, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_ru_l = CKEDITOR.replace( 'editor_ru_l' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_ru_l, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_en_l = CKEDITOR.replace( 'editor_en_l' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_en_l, null, { type: 'Files', currentFolder: '/archive/' } );
</script>
