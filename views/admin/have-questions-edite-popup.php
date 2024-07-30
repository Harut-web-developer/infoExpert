<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել (<?php echo $have_questions->name;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $alumni->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="row">
                        <div class="col-sm-12">
                            <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                            <input type="file" name="img">
                        </div>
                    </div>
                    <br>
                    <span>Linkdin-ի հղում</span>
                    <input type="text" name="AcAlumni[linkedin_link]" value="<?php echo $alumni->linkedin_link;?>" placeholder="Հղում" class="form-control">
                    <br>
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-alumni-am-tab" data-toggle="tab" href="#custom-nav-alumni-am" role="tab" aria-controls="custom-nav-alumni-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-alumni-ru-tab" data-toggle="tab" href="#custom-nav-alumni-ru" role="tab" aria-controls="custom-nav-alumni-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-alumni-en-tab" data-toggle="tab" href="#custom-nav-alumni-en" role="tab" aria-controls="custom-nav-alumni-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-alumni-am" role="tabpanel" aria-labelledby="custom-nav-alumni-am-tab">
                                <div class="form-group ">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcAlumni[alumni_am]" value="<?php echo $alumni->alumni_am;?>" required placeholder="Անուն" class="form-control">
                                    <span>Պարունակություն</span>
                                    <textarea name="AcAlumni[text_am]" class="form-control" id="editor_am" placeholder="Պարունակություն" rows="3"><?php echo $alumni->text_am;?>"</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-alumni-ru" role="tabpanel" aria-labelledby="custom-nav-alumni-ru-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcAlumni[alumni_ru]" value="<?php echo $alumni->alumni_ru;?>" required placeholder="Անուն" class="form-control">
                                    <span>Պարունակություն</span>
                                    <textarea name="AcAlumni[text_ru]" class="form-control" id="editor_ru" placeholder="Պարունակություն" rows="3"><?php echo $alumni->text_ru;?>"</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-alumni-en" role="tabpanel" aria-labelledby="custom-nav-alumni-en-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcAlumni[alumni_en]" value="<?php echo $alumni->alumni_en;?>" required placeholder="Անուն" class="form-control">
                                    <span>Պարունակություն</span>
                                    <textarea name="AcAlumni[text_en]" class="form-control" id="editor_en" placeholder="Պարունակություն" rows="3"><?php echo $alumni->text_en;?>"</textarea>
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


