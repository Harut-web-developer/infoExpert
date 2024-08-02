<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( հարցը ՝ <?php echo $question->name_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $question->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-quest-am-tab" data-toggle="tab" href="#custom-nav-quest-am" role="tab" aria-controls="custom-nav-quest-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-quest-ru-tab" data-toggle="tab" href="#custom-nav-quest-ru" role="tab" aria-controls="custom-nav-quest-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-quest-en-tab" data-toggle="tab" href="#custom-nav-quest-en" role="tab" aria-controls="custom-nav-quest-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-quest-am" role="tabpanel" aria-labelledby="custom-nav-quest-am-tab">
                                <div class="form-group ">
                                    <span>Հարց</span>
                                    <input type="text" name="AcQuestionQuests[name_am]" value="<?php echo $question->name_am;?>" required placeholder="Հարց" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-quest-ru" role="tabpanel" aria-labelledby="custom-nav-quest-ru-tab">
                                <div class="form-group">
                                    <span>Հարց</span>
                                    <input type="text" name="AcQuestionQuests[name_ru]" value="<?php echo $question->name_ru;?>" required placeholder="Հարց" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-quest-en" role="tabpanel" aria-labelledby="custom-nav-quest-en-tab">
                                <div class="form-group">
                                    <span>Հարց</span>
                                    <input type="text" name="AcQuestionQuests[name_en]" value="<?php echo $question->name_en;?>" required placeholder="Հարց" class="form-control">
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



