<!-- Harut-->
<input type="hidden" data-page='Alumni' id="page">
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
                        <h4 class="box-title">Հետադարձ զանգեր
                            <span class="buttons">
                              <span class="overlay show_" style="width:33px;"></span>
                              <button class="btn btn-sm btn-default" id="editeCallback"><i class="fa fa-pencil"></i></button>
                              <button class="btn btn-sm btn-danger" id="disableCallback"><i class="fa fa-trash"></i></button>
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
                                                <th scope="col">Հեռախոսահամար</th>
                                                <th scope="col">Դասընթաց</th>
                                                <th scope="col">Պատասխանել է</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($call_back)){ ?>
                                                <?php foreach ($call_back as $item){ ?>
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
                                                            <?php echo $item->phone;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->courses->lesson_name_am;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item->checked_answer == 0){?>
                                                                <input type="checkbox" class="checkedAnswer">
                                                            <?php }?>
                                                            <?php if($item->checked_answer == 1){?>
                                                                <span><?=$item->adminName->username?></span>
                                                            <?php }?>
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
<style>
    .is_types span{
        padding-right:10px;
    }
</style>
