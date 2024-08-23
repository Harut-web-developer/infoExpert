<input type="hidden" data-page='AcOrders' id="page">
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
                        <h4 class="box-title">Ընդհանուր վճարները ըստ հաճախորդների
                            <span class="buttons">
                                          <span class="overlay show_" style="width:33px;"></span>
                                          <button class="btn btn-sm btn-default" id="editeOrders"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-sm btn-danger" id="disableOrders"><i class="fa fa-trash"></i></button>
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
                                                <th scope="col">Հաճախորդ</th>
                                                <th scope="col">Ընհանուր վճար</th>
                                                <th scope="col">Ըստ առանձին վճարների</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($orders)){ ?>
                                                <?php foreach ($orders as $item){ ?>
                                                    <tr data-id="<?php echo $item->id;?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($item->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item->id;?></td>
                                                        <td scope="col"><?php echo $item->username->username;?></td>
                                                        <td scope="col"><?php echo $item->total_price;?> դր.</td>
                                                        <td scope="col"><a href="/admin/order-items?id=<?=$item->id?>">Ըստ դասընթացների</a></td>
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
    <div class="modals">

    </div>