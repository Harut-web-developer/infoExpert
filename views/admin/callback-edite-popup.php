<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( հետադարձ զանգ ՝ <?php echo $callback->name;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $callback->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <span>Անուն</span>
                    <input type="text" name="AcCallback[name]" value="<?php echo $callback->name;?>" placeholder="Անուն" class="form-control">
                    <br>
                    <span>Էլ. հասցե</span>
                    <input type="text" name="AcCallback[email]" value="<?php echo $callback->email;?>" placeholder="Էլ. հասցե" class="form-control">
                    <br>
                    <span>Հեռախոսահամար</span>
                    <input type="text" name="AcCallback[phone]" value="<?php echo $callback->phone;?>" placeholder="Հեռախոսահամար" class="form-control">
                    <br>
                    <span>Դասընթաց</span>
                    <select name="AcCallback[course]" id="" class="form-control">
                        <?php foreach ($lessons as $lesson){?>
                            <option <?=$callback->course == $lesson->id ? 'selected' : ''?> value="<?=$lesson->id?>"><?=$lesson->lesson_name_am?></option>
                            <?php } ?>
                    </select>
                    <br>
                    <?php if (Yii::$app->user->identity->role == 10){?>
                        <span>Պատասխանած ադմին</span>
                        <select name="AcCallback[answer_admin_id]" id="" class="form-control">
                            <option <?=$callback->answer_admin_id == null ? 'selected' : ''?> value="">Ընտրել պատասխանողին</option>
                            <?php foreach ($admin as $item){?>
                                <option <?=$callback->answer_admin_id == $item->id ? 'selected' : ''?> value="<?=$item->id?>"><?=$item->username?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <select name="AcCallback[checked_answer]" id="" class="form-control">
                            <option <?=$callback->checked_answer == 1 ? 'selected' : ''?> value="1">Պատասխանել է</option>
                            <option <?=$callback->checked_answer == 0 ? 'selected' : ''?> value="0">Չի պատասխանել</option>
                        </select>
                    <?php } ?>
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


