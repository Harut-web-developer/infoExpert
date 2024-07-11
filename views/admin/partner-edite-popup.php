<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( գործընկեր ՝ <?php echo $partner->name_am;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $partner->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="row">

                        <div class="col-sm-12">
                            <?php if(!empty($partner->img)){?>
                                <br>
                                <img src="<?php echo $partner->img;?>" height="60" alt="">
                                <br>
                                <input type="hidden" name="old_img" value="<?php echo $partner->img;?>">
                            <?php } ?>

                            <span style="margin-bottom: 4px;color: #878787;">Լոգո</span>
                            <input type="file" name="logo">
                            <?php if(!empty($partner->img_black)){?>
                                <br>
                                <img src="/<?php echo $partner->img_black;?>" height="60" alt="">
                                <br>
                                <input type="hidden" name="old_img_black" value="<?php echo $partner->img_black;?>">
                            <?php } ?>
                            <span style="margin-bottom: 4px;color: #878787;">Լոգո ( Սև-սպիտակ )</span>
                            <input type="file" name="logo_black">
                        </div>

                    </div>
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
                                    <input type="text" name="AcPartners[name_am]" value="<?php echo $partner->name_am;?>" required placeholder="Անուն" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-product-ru" role="tabpanel" aria-labelledby="custom-nav-product-ru-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcPartners[name_ru]" value="<?php echo $partner->name_ru;?>" required placeholder="Անուն" class="form-control"></div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-product-en" role="tabpanel" aria-labelledby="custom-nav-product-en-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcPartners[name_en]" value="<?php echo $partner->name_en;?>" required placeholder="Անուն" class="form-control">   </div>
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
    function isValid(p) {
        var phoneRe = /^[0-9]\d{2}[2-9]\d{2}\d{3}$/;
        var digits = p.replace(/\D/g, "");
        if(!phoneRe.test(digits)){
            jQuery('.ph').css('border','1px solid red');
            jQuery('#editenew .btn-succ').attr('disabled','disabled');
        } else {
            jQuery('.ph').css('border','1px solid #ced4da');
            jQuery('#editenew .btn-succ').removeAttr('disabled');
        }
    }
    function isValidHvhh(p) {
        var hvhh = /^[0-9]\d{2}[2-9]\d{2}\d{3}$/;
        var digits = p.val().replace(/\D/g, "");
        if(!hvhh.test(digits)){
            p.css('border','1px solid red');
            jQuery('#editenew .btn-succ').attr('disabled','disabled');
        } else {
            p.css('border','1px solid #ced4da');
            jQuery('#editenew .btn-succ').removeAttr('disabled');
        }
    }
</script>