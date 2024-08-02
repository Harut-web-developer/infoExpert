<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Պատասխան ՝ <?php echo $answer->name_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $answer->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <select name="AcQuestionAnswers[is_true]"  class="form-control">
                        <option <?=$answer->is_true == 0 ? 'selected' : ''?> value="0">սխալ պատասխան</option>
                        <option <?=$answer->is_true == 1 ? 'selected' : ''?> value="1"> Ճիշտ պատասխան</option>
                    </select>
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-answerQuestion-am-tab" data-toggle="tab" href="#custom-nav-answerQuestion-am" role="tab" aria-controls="custom-nav-answerQuestion-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-answerQuestion-ru-tab" data-toggle="tab" href="#custom-nav-answerQuestion-ru" role="tab" aria-controls="custom-nav-answerQuestion-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-answerQuestion-en-tab" data-toggle="tab" href="#custom-nav-answerQuestion-en" role="tab" aria-controls="custom-nav-answerQuestion-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-answerQuestion-am" role="tabpanel" aria-labelledby="custom-nav-answerQuestion-am-tab">
                                <div class="form-group ">
                                    <span>Պատասխան</span>
                                    <input type="text" name="AcQuestionAnswers[name_am]" value="<?=$answer->name_am?>" required placeholder="Պատասխան" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-answerQuestion-ru" role="tabpanel" aria-labelledby="custom-nav-answerQuestion-ru-tab">
                                <div class="form-group">
                                    <span>Պատասխան</span>
                                    <input type="text" name="AcQuestionAnswers[name_am]" value="<?=$answer->name_ru?>" required placeholder="Պատասխան" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-answerQuestion-en" role="tabpanel" aria-labelledby="custom-nav-answerQuestion-en-tab">
                                <div class="form-group">
                                    <span>Պատասխան</span>
                                    <input type="text" name="AcQuestionAnswers[name_am]" value="<?=$answer->name_en?>" required placeholder="Պատասխան" class="form-control">
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



