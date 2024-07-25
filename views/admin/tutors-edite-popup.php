<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Դասընթացավար ՝ <?php echo $tutors->username_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $tutors->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="row">
                        <div class="col-sm-12">
                            <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                            <input type="file" name="img">
                        </div>
                    </div>
                    <span>Դասընթաց</span>
                    <select name="AcTutors[lesson_id]" id="" class="form-control">
                        <option value="">ընտրել դասընթացը</option>
                        <?php if (!empty($lessons)){foreach ($lessons as $lesson){?>
                            <option <?=$lesson->id == $tutors->lesson_id ? 'selected' : ''?> value="<?=$lesson->id?>"><?=$lesson->lesson_name_am?></option>
                        <?php }} ?>
                    </select>
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
                                    <input type="text" name="AcTutors[username_am]" value="<?php echo $tutors->username_am;?>" required placeholder="Անուն" class="form-control">
                                    <span>Պարունակություն</span>
                                    <textarea name="AcTutors[text_am]" class="form-control" id="editor_am" placeholder="Պարունակություն" rows="3"><?php echo $tutors->text_am;?>"</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-product-ru" role="tabpanel" aria-labelledby="custom-nav-product-ru-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcTutors[username_ru]" value="<?php echo $tutors->username_ru;?>" required placeholder="Անուն" class="form-control">
                                    <span>Պարունակություն</span>
                                    <textarea name="AcTutors[text_ru]" class="form-control" id="editor_ru" placeholder="Պարունակություն" rows="3"><?php echo $tutors->text_ru;?>"</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-product-en" role="tabpanel" aria-labelledby="custom-nav-product-en-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcTutors[username_en]" value="<?php echo $tutors->username_en;?>" required placeholder="Անուն" class="form-control">
                                    <span>Պարունակություն</span>
                                    <textarea name="AcTutors[text_en]" class="form-control" id="editor_en" placeholder="Պարունակություն" rows="3"><?php echo $tutors->text_en;?>"</textarea>
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

