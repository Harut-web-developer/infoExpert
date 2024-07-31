<!-- Mariam-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել (<?php echo $have_questions->name;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $have_questions->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <span>Անուն</span>
                    <input type="text" name="AcHaveQuestions[name]" value="<?php echo $have_questions->name;?>" placeholder="Անուն" class="form-control">
                    <br>
                    <span>Էլ. հասցե</span>
                    <input type="text" name="AcHaveQuestions[email]" value="<?php echo $have_questions->email;?>" placeholder="Էլ. հասցե" class="form-control">
                    <br>
                    <span>Հարց</span>
                    <input type="text" name="AcHaveQuestions[question]" value="<?php echo $have_questions->question;?>" placeholder="Հեռախոսահամար" class="form-control">
                    <br>
                    <?php if (Yii::$app->user->identity->role == 10){?>
                        <span>Պատասխանած ադմին</span>
                        <select name="AcHaveQuestions[answer_admin_id]" id="" class="form-control">
                            <option <?=$have_questions->answer_admin_id == null ? 'selected' : ''?> value="">Ընտրել պատասխանողին</option>
                            <?php foreach ($admin as $item){?>
                                <option <?=$have_questions->answer_admin_id == $item->id ? 'selected' : ''?> value="<?=$item->id?>"><?=$item->username?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <select name="AcHaveQuestions[checked_answer]" id="" class="form-control">
                            <option <?=$have_questions->checked_answer == 1 ? 'selected' : ''?> value="1">Պատասխանել է</option>
                            <option <?=$have_questions->checked_answer == 0 ? 'selected' : ''?> value="0">Չի պատասխանել</option>
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


