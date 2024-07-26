<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Հտհ ՝ <?php echo $answer->question_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <input type="hidden" name="id" value="<?php echo $answer->id;?>">
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-answer-am-tab" data-toggle="tab" href="#custom-nav-answer-am" role="tab" aria-controls="custom-nav-answer-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-answer-ru-tab" data-toggle="tab" href="#custom-nav-answer-ru" role="tab" aria-controls="custom-nav-answer-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-answer-en-tab" data-toggle="tab" href="#custom-nav-answer-en" role="tab" aria-controls="custom-nav-answer-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-answer-am" role="tabpanel" aria-labelledby="custom-nav-answer-am-tab">
                                <div class="form-group ">
                                    <span>Հարց</span>
                                    <input type="text" name="AcAnswers[question_am]" value="<?php echo $answer->question_am;?>" required placeholder="Հարց" class="form-control">
                                    <span>Պատասխան</span>
                                    <input type="text" name="AcAnswers[answer_am]" value="<?php echo $answer->answer_am;?>" required placeholder="Պատասխան" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-answer-ru"  role="tabpanel" aria-labelledby="custom-nav-answer-ru-tab">
                                <div class="form-group">
                                    <span>Հարց</span>
                                    <input type="text" name="AcAnswers[question_ru]" value="<?php echo $answer->question_ru;?>" required placeholder="Հարց" class="form-control"></div>
                                <span>Պատասխան</span>
                                <input type="text" name="AcAnswers[answer_ru]" value="<?php echo $answer->answer_ru;?>" required placeholder="Պատասխան" class="form-control">
                            </div>
                            <div class="tab-pane fade" id="custom-nav-answer-en" role="tabpanel" aria-labelledby="custom-nav-answer-en-tab">
                                <div class="form-group">
                                    <span>Հարց</span>
                                    <input type="text" name="AcAnswers[question_en]" value="<?php echo $answer->question_en;?>" required placeholder="Հարց" class="form-control">
                                    <span>Պատասխան</span>
                                    <input type="text" name="AcAnswers[answer_en]" value="<?php echo $answer->answer_en;?>" required placeholder="Պատասխան" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                    <button type="submit" class="btn btn-succ" name="edite" value="true">Գրանցել</button>
                    <div class="info-bl-ec"></div>
                </form>

            </div>

        </div>
    </div>
</div>
<script>
    jQuery('#editenew').modal('show');
</script>