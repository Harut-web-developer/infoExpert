<!-- Harut-->
<div class="modal fade add-new" id="editenew" tabindex="-1" role="dialog" aria-labelledby="editenew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Փոփոխել ( օգտատեր ՝ <?php echo $user->username;?>) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $user->id;?>">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                    <div class="row">
                        <div class="col-sm-12">
                            <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                            <input type="file" name="img">
                            <span style="margin-bottom: 4px;color: #878787;">Cv</span>
                            <input type="file" name="cv">
                            <span style="margin-bottom: 4px;color: #878787;">Անուն/ազգանուն *</span>
                            <input type="text" name="User[username]" value="<?=$user->username?>" placeholder="Անուն/ազգանուն" required class="form-control">
                            <span style="margin-bottom: 4px;color: #878787;">Էլ. հասցե *</span>
                            <input type="text" name="User[email]" value="<?=$user->email?>" placeholder="Էլ. հասցե" required class="form-control">
                            <span style="margin-bottom: 4px;color: #878787;">Հեռախոսահամար</span>
                            <input type="number" name="User[phone]" value="<?=$user->phone?>" placeholder="Հեռախոսահամար" required class="form-control">
                            <span style="margin-bottom: 4px;color: #878787;">Linkedin_ի hղում</span>
                            <input type="text" name="User[linkdin_url]" value="<?=$user->linkdin_url?>" placeholder="Linkedin_ի hղում" class="form-control">
                            <span style="margin-bottom: 4px;color: #878787;">Գաղտնաբառ *</span>
                            <input type="password" name="Users[password]" required placeholder="Գաղտնաբառ" class="form-control">
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



