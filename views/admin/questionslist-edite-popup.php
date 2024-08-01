<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Հարցաշար ՝ <?php echo $questions->name_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $questions->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-question-am-tab" data-toggle="tab" href="#custom-nav-question-am" role="tab" aria-controls="custom-nav-question-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-question-ru-tab" data-toggle="tab" href="#custom-nav-question-ru" role="tab" aria-controls="custom-nav-question-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-question-en-tab" data-toggle="tab" href="#custom-nav-question-en" role="tab" aria-controls="custom-nav-question-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-question-am" role="tabpanel" aria-labelledby="custom-nav-question-am-tab">
                                <div class="form-group ">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcQuestionList[name_am]" value="<?php echo $questions->name_am;?>" required placeholder="Անուն" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-question-ru" role="tabpanel" aria-labelledby="custom-nav-question-ru-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcQuestionList[name_ru]" value="<?php echo $questions->name_ru;?>" required placeholder="Անուն" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-question-en" role="tabpanel" aria-labelledby="custom-nav-question-en-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcQuestionList[name_en]" value="<?php echo $questions->name_en;?>" required placeholder="Անուն" class="form-control">
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