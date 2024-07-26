<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել կայքի տվյալները </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $info->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <br>
                    <span>Գործընկեր</span>
                    <input type="text" name="AcInfo[partner]" required value="<?php echo $info->partner;?>" placeholder="Գործընկեր" class="form-control">
                    <br>
                    <span>Ապրանքներ</span>
                    <input type="text" name="AcInfo[products]" required value="<?php echo $info->products;?>" placeholder="Ապրանքներ" class="form-control">
                    <br>
                    <span>Ծրագրեր</span>
                    <input type="text" name="AcInfo[programms]" required value="<?php echo $info->programms;?>" placeholder="Ծրագրեր" class="form-control">
                    <br>
                    <span>facebook-ի հղում</span>
                    <input type="text" name="AcInfo[facebook_link]" value="<?php echo $info->facebook_link;?>" placeholder="facebook-ի հղում" class="form-control">
                    <br>
                    <span>instagram-ի հղում</span>
                    <input type="text" name="AcInfo[instagram_link]" value="<?php echo $info->instagram_link;?>" placeholder="instagram-ի հղում" class="form-control">
                    <br>
                    <span>linkedin-ի հղում</span>
                    <input type="text" name="AcInfo[linkdin_link]" value="<?php echo $info->linkdin_link;?>" placeholder="linkedin-ի հղում" class="form-control">
                    <br>
                    <span>Էլ. հասցե</span>
                    <input type="text" name="AcInfo[infoexpert_email]" required value="<?php echo $info->infoexpert_email;?>" placeholder="Էլ. հասցե" class="form-control">
                    <br>
                    <span>Հեռախոսահամար</span>
                    <input type="text" name="AcInfo[phone_number]" required value="<?php echo $info->phone_number;?>" placeholder="Հեռախոսահամար" class="form-control">
                    <br>
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


