<div class="modal fade add-new" id="edite-page" tabindex="-1" role="dialog" aria-labelledby="edite-page" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել  (<?php echo $page->page_name_am;?>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <input type="hidden" name="id" value="<?php echo $page->id;?>">
                    <div class="row">

                        <div class="col-sm-12">
                            <?php if(!empty($page->img)){?>
                                <br>
                                <img src="<?php echo $page->img;?>" height="60" alt="">
                                <br>
                                <input type="hidden" name="old_img" value="<?php echo $page->img;?>">
                            <?php } ?>
                            <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                            <input type="file" name="img">
                        </div>
                    </div>
                            <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-blog-am-tab" data-toggle="tab" href="#custom-nav-blog-am" role="tab" aria-controls="custom-nav-blog-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-blog-ru-tab" data-toggle="tab" href="#custom-nav-blog-ru" role="tab" aria-controls="custom-nav-blog-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-blog-en-tab" data-toggle="tab" href="#custom-nav-blog-en" role="tab" aria-controls="custom-nav-blog-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-blog-am" role="tabpanel" aria-labelledby="custom-nav-blog-am-tab">
                                <div class="form-group ">
                                    <span>Անուն</span>
                                    <input type="text" name="AcBlog[page_name_am]" value="<?php echo $page->page_name_am;?>" required placeholder="Անուն" class="form-control">
                                    <span>Վերնագիր</span>
                                    <input type="text" name="AcBlog[page_title_am]"  value="<?php echo $page->page_title_am;?>"  placeholder="Վերնագիր" class="form-control">
                                    <span>Բանալի Բառեր</span>
                                    <textarea name="AcBlog[page_keywords_am]" class="form-control" placeholder="Բանալի Բառեր" rows="3"><?php echo $page->page_keywords_am;?></textarea>
                                    <span>Պարունակություն</span>
                                    <textarea name="AcBlog[page_content_am]" class="form-control" id="editor_am_p" placeholder="Պարունակություն" rows="3"><?php echo $page->page_content_am;?></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-blog-ru" role="tabpanel" aria-labelledby="custom-nav-blog-ru-tab">
                                <div class="form-group">
                                    <span>Անուն</span>
                                    <input type="text" name="AcBlog[page_name_ru]"  value="<?php echo $page->page_name_ru;?>"  placeholder="Անուն" class="form-control">
                                    <span>Վերնագիր</span>
                                    <input type="text" name="AcBlog[page_title_ru]"  value="<?php echo $page->page_title_ru;?>"  placeholder="Վերնագիր" class="form-control">
                                    <span>Բանալի Բառեր</span>
                                    <textarea name="AcBlog[page_keywords_ru]" class="form-control" placeholder="Բանալի Բառեր" rows="3"><?php echo $page->page_keywords_ru;?></textarea>
                                    <span>Պարունակություն</span>
                                    <textarea name="AcBlog[page_content_ru]" class="form-control"  id="editor_ru_p" placeholder="Պարունակություն" rows="3"><?php echo $page->page_content_ru;?></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-blog-en" role="tabpanel" aria-labelledby="custom-nav-blog-en-tab">
                                <div class="form-group">
                                    <span>Անուն</span>
                                    <input type="text" name="AcBlog[page_name_en]"  value="<?php echo $page->page_name_en;?>"  placeholder="Անուն" class="form-control">
                                    <span>Վերնագիր</span>
                                    <input type="text" name="AcBlog[page_title_en]"  value="<?php echo $page->page_title_en;?>"  placeholder="Վերնագիր" class="form-control">
                                    <span>Բանալի Բառեր</span>
                                    <textarea name="AcBlog[page_keywords_en]" class="form-control" placeholder="Բանալի Բառեր" rows="3"><?php echo $page->page_keywords_en;?></textarea>
                                    <span>Պարունակություն</span>
                                    <textarea name="AcBlog[page_content_en]" class="form-control"  id="editor_en_p" placeholder="Պարունակություն" rows="3"><?php echo $page->page_content_en;?></textarea>
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
    jQuery('#edite-page').modal('show');
</script>
<script src="/web/ckfinder/ckfinder.js"></script>
<script src="/web/ckeditor/ckeditor.js"></script>

<script>

    var editor_p = CKEDITOR.replace( 'editor_am_p' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_p, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_ru_p = CKEDITOR.replace( 'editor_ru_p' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_ru_p, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_en_p = CKEDITOR.replace( 'editor_en_p' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_en_p, null, { type: 'Files', currentFolder: '/archive/' } );
</script>