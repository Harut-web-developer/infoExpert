<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( Շրջանավարտ ՝ <?php echo $groups->groups_name;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $groups->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <br>
                    <span>Խմբի անվանում</span>
                    <input type="text" name="AcGroups[groups_name]" value="<?=$groups->groups_name?>" required placeholder="Անվանում" class="form-control">
                    <br>
                    <span>Դասընթաց</span>
                    <select name="AcGroups[lesson_id]" id="" class="form-control" required>
                        <option value="">Ընտրել դասընթաց</option>
                        <?php if (!empty($lessons)){foreach ($lessons as $lesson){?>
                            <option <?=$lesson['id'] == $groups->lesson_id ? 'selected' : ''?> value="<?=$lesson['id']?>"><?=$lesson['lesson_name_am']?></option>
                        <?php }} ?>
                    </select>
                    <br>
                    <span>Դասընթացի տեսակը</span>
                    <select name="AcGroups[action]" id="" class="form-control">
                        <option <?=$groups->action == null ? 'selected' : ''?> value="">Ընտրել տեսակը</option>
                        <option <?=$groups->action == 1 ? 'selected' : ''?> value="1">Օնլայն</option>
                        <option <?=$groups->action == 0 ? 'selected' : ''?> value="0">Օֆլայն</option>
                    </select>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <span>Ուսանողներ</span>
                            <select class="js-example-basic-multiple" style="width: 100%" required name="AcGroups[user_id][]" multiple="multiple">
                                <?php if (!empty($users)){foreach ($users as $user){?>
                                    <option <?=$user['groups_id'] == $groups->id ? 'selected' : ''?> value="<?=$user['id']?>"><?=$user['username']?></option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <?php
                    if (Yii::$app->user->identity->role == 10 && !empty($groups->lesson_count)){?>
                        <div class="row">
                            <div class="col-sm-12">
                                <span>Անցկացված դասերը</span>
                                <div class="lessonFieldBtn" data-groups-id="<?=$groups->id?>">
                                    <?php
                                    for ($i = 1; $i <= $groups->lesson_count; $i++){
                                        echo '<span class="backLesson" data-lesson="'.($i - 1).'">'.$i.'</span>';
                                    }?>
                                </div>
                            </div>
                        </div>
                        <br>
                    <?php }?>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>



