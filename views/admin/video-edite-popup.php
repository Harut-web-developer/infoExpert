<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Վիդեոդաս ՝ <?php echo $video->name_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <input type="hidden" name="id" value="<?=$video->id?>">
                    <span>Հերթական դասը</span>
                    <select class="form-control" name="AcVideoLessons[lesson_number]" required>
                        <option <?=$video->lesson_number == '' ? 'selected' : ''?> value="">Ընտրել...</option>
                        <?php for ($i = 1; $i <= $lesson_number->lessons_count; $i++){?>
                            <option <?=$video->lesson_number == $i ? 'selected' : ''?> value="<?=$i?>">դաս № <?=$i?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <span>Վիդեոյի տեսակը</span>
                    <select class="form-control" name="AcVideoLessons[type]" id="videoTypeUpdate" required>
                        <option <?=$video->type == '' ? 'selected' : ''?> value="">Ընտրել...</option>
                        <option <?=$video->type == 0 ? 'selected' : ''?> value="0">Յութուբ</option>
                        <option <?=$video->type == 1 ? 'selected' : ''?> value="1">Այլ</option>
                    </select>
                    <br>
                    <div class="row inputTypeFieldUpdate">
                        <?php if ($video->type == 0){?>
                            <div class="col-sm-12">
                                <span>Յոիթուբի հղում</span>
                                <input type="url" value="<?=$video->video?>"  name="AcVideoLessons[video]" placeholder="https://www.youtube.com/..." class="form-control" required>
                            </div>
                        <?php }else if ($video->type == 1){?>
                            <div class="col-sm-12">
                                    <iframe width="240" height="150" src="/<?=$video->video?>" frameborder="0" allowfullscreen></iframe>
                                <div>
                                    <span>Վիդեոդասեր</span>
                                    <input type="file" name="video" required>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
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
                                    <span>Անուն</span>
                                    <input type="text" name="AcVideoLessons[name_am]" value="<?=$video->name_am?>" required placeholder="Անուն" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-alumni-ru" role="tabpanel" aria-labelledby="custom-nav-alumni-ru-tab">
                                <div class="form-group ">
                                    <span>Անուն</span>
                                    <input type="text" name="AcVideoLessons[name_ru]" value="<?=$video->name_ru?>" required placeholder="Անուն" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-alumni-en" role="tabpanel" aria-labelledby="custom-nav-alumni-en-tab">
                                <div class="form-group ">
                                    <span>Անուն</span>
                                    <input type="text" name="AcVideoLessons[name_en]" value="<?=$video->name_en?>" required placeholder="Անուն" class="form-control">
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
