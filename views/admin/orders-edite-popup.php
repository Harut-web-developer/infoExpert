<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Պատվերը ՝ <?php echo $orders->id;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $orders->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <br>
                    <span>Ուսանող(ուհի)</span>
                    <input type="text" value="<?=$orders->username->username?>" placeholder="Ուսանող(ուհի)" class="form-control" readonly>
                    <input type="hidden" name="AcOrders[user_id]" value="<?=$orders->user_id?>"  class="form-control" readonly>
                    <br>
                    <select class="js-example-basic-multiple" style="width: 100%" name="lesson_id[]" multiple="multiple">
                        <option  value="">Ընտրել</option>
                        <?php if (!empty($lessons)){foreach ($lessons as $lesson){?>
                            <option <?= in_array($lesson['lesson_id'], $lessons_arr) ? 'selected' : ''?> value="<?=$lesson['lesson_id']?>"><?=$lesson['lesson_name']?></option>
                        <?php }} ?>
                    </select>
                    <br>
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>


