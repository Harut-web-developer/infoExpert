<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( կարծիք ՝ <?php echo $review->from_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $review->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <input type="text" name="AcReviews[stars]" value="<?php echo $review->stars;?>" required placeholder="ԳՆահատական 1-5" class="form-control">
                    <br>
                    <input type="text" name="AcReviews[url]" value="<?php echo $review->url;?>"  placeholder="Հղում" class="form-control">
                    <br>
                    <select name="AcReviews[platform]" id="" class="form-control">
                        <option value="1" <?php if($review->platform =='1'){ echo 'selected';}?>>Linkedin</option>
                        <option value="2" <?php if($review->platform =='2'){ echo 'selected';}?>>Facebook</option>
                    </select>
                    <br>
                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-product-am-tab" data-toggle="tab" href="#custom-nav-review-am" role="tab" aria-controls="custom-nav-review-am" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-product-ru-tab" data-toggle="tab" href="#custom-nav-review-ru" role="tab" aria-controls="custom-nav-review-ru" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-product-en-tab" data-toggle="tab" href="#custom-nav-review-en" role="tab" aria-controls="custom-nav-review-en" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent"><br>
                            <div class="tab-pane fade active show" id="custom-nav-review-am" role="tabpanel" aria-labelledby="custom-nav-review-am-tab">
                                <div class="form-group ">
                                    <span>Ում կողմից</span>
                                    <input type="text" name="AcReviews[from_am]" value="<?php echo $review->from_am;?>" required placeholder="Ում կողմից" class="form-control">
                                </div>
                                <div class="form-group ">
                                    <span>Կարծիք</span>
                                    <input type="text" name="AcReviews[text_am]" value="<?php echo $review->text_am;?>" required placeholder="Անուն" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-review-ru" role="tabpanel" aria-labelledby="custom-nav-review-ru-tab">
                                <div class="form-group ">
                                    <span>Ում կողմից</span>
                                    <input type="text" name="AcReviews[from_ru]" value="<?php echo $review->from_ru;?>" required placeholder="Ում կողմից" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Կարծիք</span>
                                    <input type="text" name="AcReviews[text_ru]" value="<?php echo $review->text_ru;?>" required placeholder="Անուն" class="form-control"></div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-review-en" role="tabpanel" aria-labelledby="custom-nav-review-en-tab">
                                <div class="form-group ">
                                    <span>Ում կողմից</span>
                                    <input type="text" name="AcReviews[from_en]" value="<?php echo $review->from_en;?>" required placeholder="Ում կողմից" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span>Կարծիք</span>
                                    <input type="text" name="AcReviews[text_en]" value="<?php echo $review->text_en;?>" required placeholder="Անուն" class="form-control">   </div>
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