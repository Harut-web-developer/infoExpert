<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( սերտիֆիկատ ՝ <?php echo $certificate->userName->username;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $certificate->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="row">
                        <div class="col-sm-12">
                            <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                            <input type="file" name="img">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <span>Շրջանավարտներ</span>
                            <select class="js-example-basic-single" style="width: 100%" name="AcCertificate[user_id]">
                                <option  value="">Ընտրել</option>
                                <?php if (!empty($alumni)){foreach ($alumni as $alumnus){?>
                                    <option <?=$alumnus['user_id'] == $certificate->user_id ? 'selected' : ''?> value="<?=$alumnus['user_id']?>"><?=$alumnus['username']?></option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <span>Դասընթաց</span>
                    <select name="AcCertificate[lesson_id]" id="" class="form-control">
                        <?php foreach ($lessons as $lesson){?>
                            <option <?=$lesson->id == $certificate->lesson_id ? 'selected' : ''?> value="<?=$lesson->id?>"><?=$lesson->lesson_name_am?></option>
                        <?php } ?>
                    </select>
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>


