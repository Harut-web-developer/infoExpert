<!-- Harut-->
<input type="hidden" data-page='AcRating' id="page">
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
                        <h4 class="box-title">Վարկանիշ
                            <span class="buttons">
                                          <span class="overlay show_ " style="width:33px;"></span>
                                          <button style="margin-left: 34px;" class="btn btn-sm btn-danger" id="disableRating"><i class="fa fa-trash"></i></button>
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
                                                <th scope="col">Ուսանող/ուհի</th>
                                                <th scope="col">Դասընթաց</th>
                                                <th scope="col">Վարկանիշ</th>
                                                <th scope="col">Մեկնաբանություն</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($rating)){ ?>
                                                <?php foreach ($rating as $item){ ?>
                                                    <tr data-id="<?php echo $item->id;?>">
                                                        <td scope="col">
                                                            <?php  if($item->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item->id;?></td>
                                                        <td scope="col">
                                                            <?php echo $item->userName->username;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->lessons->lesson_name_am;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->rating;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->comment;?>
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
</div>
<style>
    .is_types span{
        padding-right:10px;
    }
</style>

