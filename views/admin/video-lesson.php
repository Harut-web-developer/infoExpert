<!-- Harut-->
<input type="hidden" data-page='AcVideoLessons' id="page">
<?php if(isset($_GET['success'])){ ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        Հաջողությամբ պահպանվեց
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <script>
        var url = window.location.href;
        url = url.split('?')[0]+'?id=<?=$_GET['id'];?>';
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
                        <h4 class="box-title">Վիդեոդասեր
                            <span class="buttons">
                                          <span class="overlay show_" style="width:33px;"></span>
                                          <button class="btn btn-sm btn-default" id="editeVideo"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-sm btn-danger" id="disableVideo"><i class="fa fa-trash"></i></button>
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
                                                <th scope="col">Դասի №_ը</th>
                                                <th scope="col">Վիդեոդասի անվանում</th>
                                                <th scope="col">Տեսակ</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($video)){ ?>
                                                <?php foreach ($video as $item){ ?>
                                                    <tr data-id="<?php echo $item->id;?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($item->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item->id;?></td>
                                                        <td scope="col">դաս № <?php echo $item->lesson_number;?></td>
                                                        <td scope="col"><?php echo $item->name_am;?></td>
                                                        <td scope="col">
                                                            <?php if($item->type == 1){
                                                                echo 'Այլ վիդեոներ';
                                                            } else {
                                                                echo 'Յութուբյան';
                                                            };?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->status == 1){
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
                    <h5 class="modal-title" id="addnew">Ավելացնել դասընթաց</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="AcVideoLessons[lesson_id]" value="<?=$lesson_number->id?>">
                        <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                        <span>Հերթական դասը</span>
                        <select class="form-control" name="AcVideoLessons[lesson_number]" required>
                            <option value="">Ընտրել...</option>
                            <?php for ($i = 1; $i <= $lesson_number->lessons_count; $i++){
                                if (!in_array($i,$new_number)){?>
                                    <option value="<?=$i?>">դաս № <?=$i?></option>
                                <?php }} ?>
                        </select>
                        <br>
                        <span>Վիդեոյի տեսակը</span>
                        <select class="form-control" name="AcVideoLessons[type]" id="videoType" required>
                            <option value="">Ընտրել...</option>
                            <option value="0">Յութուբ</option>
                            <option value="1">Այլ</option>
                        </select>
                        <br>
                        <div class="row inputTypeField">

                        </div>
                        <br>
                        <div class="custom-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active show" id="custom-nav-video-am-tab" data-toggle="tab" href="#custom-nav-video-am" role="tab" aria-controls="custom-nav-video-am" aria-selected="true">Հայ</a>
                                    <a class="nav-item nav-link" id="custom-nav-video-ru-tab" data-toggle="tab" href="#custom-nav-video-ru" role="tab" aria-controls="custom-nav-video-ru" aria-selected="false">Ռուս</a>
                                    <a class="nav-item nav-link " id="custom-nav-video-en-tab" data-toggle="tab" href="#custom-nav-video-en" role="tab" aria-controls="custom-nav-video-en" aria-selected="false">Անգլ</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent"><br>
                                <div class="tab-pane fade active show" id="custom-nav-video-am" role="tabpanel" aria-labelledby="custom-nav-video-am-tab">
                                    <div class="form-group ">
                                        <span>Անուն</span>
                                        <input type="text" name="AcVideoLessons[name_am]" required placeholder="Անուն" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-video-ru" role="tabpanel" aria-labelledby="custom-nav-video-ru-tab">
                                    <div class="form-group">
                                        <span>Անուն</span>
                                        <input type="text" name="AcVideoLessons[name_ru]"   placeholder="Անուն" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-video-en" role="tabpanel" aria-labelledby="custom-nav-video-en-tab">
                                    <div class="form-group">
                                        <span>Անուն</span>
                                        <input type="text" name="AcVideoLessons[name_en]"   placeholder="Անուն" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
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
