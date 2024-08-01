<!-- Harut-->
<input type="hidden" data-page='Apply-now' id="page">
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
                        <h4 class="box-title">Հայտեր
                            <span class="buttons">
                                <button class="btn btn-sm btn-danger" id="disablApply"><i class="fa fa-trash"></i></button>
                            </span>
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
                                                <th scope="col">Անուն</th>
                                                <th scope="col">Էլ. հասցե</th>
                                                <th scope="col">Դասընթաց</th>
                                                <th scope="col">Տեսակ</th>
                                                <th scope="col">Ձևաչափ</th>
                                                <th scope="col">Հեռախոսահամար</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($apply_now)){ ?>
                                                <?php foreach ($apply_now as $item){ ?>
                                                    <tr data-id="<?php echo $item->id;?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($item->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item->id;?></td>
                                                        <td scope="col">
                                                            <?php echo $item->name;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->email;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->lesson->lesson_name_am;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->lesson_type == 1){
                                                                echo 'Անհատական';
                                                            }elseif ($item->lesson_type == 2){
                                                                echo 'Խմբային';
                                                            }elseif ($item->lesson_type == 3){
                                                                echo 'Կորպորատիվ';
                                                            }?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->online_offline == 1){
                                                                echo 'Օնլայն';
                                                            }elseif ($item->online_offline == 0){
                                                                echo 'Օֆֆլայն';
                                                            } ?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->phone;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->status == 1){
                                                                echo 'Ակտիվ';
                                                            } else {
                                                                echo 'Պասիվ';
                                                            };?></td>

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

    <div class="modals">

    </div>
</div>
<script src="/web/ckfinder/ckfinder.js"></script>
<script src="/web/ckeditor/ckeditor.js"></script>

<script>

    var editor = CKEDITOR.replace( 'editor_am' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_ru = CKEDITOR.replace( 'editor_ru' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_ru, null, { type: 'Files', currentFolder: '/archive/' } );
    var editor_en = CKEDITOR.replace( 'editor_en' ,{
        filebrowserBrowseUrl: '/web/ckfinder/ckfinder.html?is_admin=yes&token=p$b7*jdT#+pFN!$E',
    });
    CKFinder.setupCKEditor( editor_en, null, { type: 'Files', currentFolder: '/archive/' } );
</script>
<style>
    .is_types span{
        padding-right:10px;
    }
</style>
