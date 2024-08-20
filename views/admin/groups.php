<!-- Harut-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<input type="hidden" data-page='AcGroups' id="page">
<?php if(isset($_GET['success'])){ ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        Հաջողությամբ պահպանվեց
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <script>
        var url = window.location.href;
        url = url.split('?')[0];
        window.history.replaceState({}, document.title, url);
    </script>
<?php } ?>
<div class="products">
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="pages">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Դասընթացի խմբեր
                            <span class="buttons">
                                          <span class="overlay show_" style="width:33px;top: -4px;"></span>
                                          <button class="btn btn-sm btn-default" id="editeGroups"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-sm btn-danger" id="disableGroups"><i class="fa fa-trash"></i></button>
                                        </span>
                            <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-succ fl" style="margin-left:10px;"><i class="bx bx-plus me-1"></i> Ավելացնել</a>
                        </h4>
                    </div>
                    <div class="card-body--">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tbl">
                                        <table class="table table-bordered ">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Խմբեր</th>
                                                <th scope="col">Դասընթաց</th>
                                                <th scope="col">Դասընթացի տեսակ</th>
                                                <th scope="col">Ուսանող(ուհի)</th>
                                                <th scope="col">Դասի ավարտ</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($groups)){ ?>
                                                <?php foreach ($groups as $item){ ?>
                                                    <tr data-id="<?php echo $item['id'];?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($item['status'] == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item['id'];?></td>
                                                        <td scope="col"><?php echo $item['groups_name'];?></td>
                                                        <td scope="col"><?php echo $item['lesson_name'];?></td>
                                                        <td scope="col"><?php
                                                            if ($item['action'] == 1) {
                                                                echo 'Օնլայն';
                                                            } elseif ($item['action'] == 0) {
                                                                echo 'Օֆլայն';
                                                            }; ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if (!empty($item['username'])){foreach ($item['username'] as $user){?>
                                                                    <div><?=$user['username']?></div>
                                                               <?php }} ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if ($item['action'] == 1){?>
                                                                <button <?=$item['status'] != 1 ? 'disabled' : ''?> data-text="start" class="btn btn-outline-success lessonBtn">Սկսել դասը</button>
                                                            <?php }else{?>
                                                                <button <?=$item['status'] != 1 ? 'disabled' : ''?> data-text="finish" class="btn btn-outline-success lessonBtn">Ավարտել դասը</button>
                                                            <?php }?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item['status'] == 1){
                                                                echo 'Ակտիվ';
                                                            } else {
                                                                echo 'Պասիվ';
                                                            };?>
                                                        </td>
                                                    </tr>
                                                <?php }} ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade add-new" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnew" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnew">Ավելացնել խմբեր</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />

                        <br>
                        <span>Խմբի անվանում</span>
                        <input type="text" name="AcGroups[groups_name]" required placeholder="Անվանում" class="form-control">
                        <br>
                        <span>Դասընթաց</span>
                        <select name="AcGroups[lesson_id]" id="" class="form-control" required>
                            <option value="">Ընտրել դասընթաց</option>
                            <?php if (!empty($lessons)){foreach ($lessons as $lesson){?>
                                <option value="<?=$lesson['id']?>"><?=$lesson['lesson_name_am']?></option>
                            <?php }} ?>
                        </select>
                        <br>
                        <span>Դասընթացի տեսակը</span>
                        <select name="AcGroups[action]" id="" class="form-control">
                            <option value="">Ընտրել տեսակը</option>
                            <option value="1">Օնլայն</option>
                            <option value="0">Օֆլայն</option>
                        </select>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <span>Ուսանողներ</span>
                                <select class="js-example-basic-multiple" style="width: 100%" required name="AcGroups[user_id][]" multiple="multiple">
                                    <?php if (!empty($users)){foreach ($users as $user){?>
                                        <option value="<?=$user['id']?>"><?=$user['username']?></option>
                                    <?php }} ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                        <button type="submit" class="btn btn-succ" name="add" value="true">Գրանցել</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modals">

    </div>
</div>
<style>
    .is_types span{
        padding-right:10px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

