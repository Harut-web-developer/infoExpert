<!-- Harut-->
<input type="hidden" data-page='AcQuizeLog' id="page">
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
                        <h4 class="box-title">Շրջանավարտներ
                            <span class="buttons">
                                  <span class="overlay show_" style="width:33px;left: -2px;"></span>
                                  <button class="btn btn-sm btn-danger" id="disableQuize"><i class="fa fa-trash"></i></button>
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
                                                <th scope="col">Անուն/ազգանուն</th>
                                                <th scope="col">Էլ. հասցե</th>
                                                <th scope="col">Հարցաշար</th>
                                                <th scope="col">Արդյունք</th>
                                                <th scope="col">Հեռախոսահամար</th>
                                                <th scope="col">Գրանցված</th>
                                                <th scope="col">Ամսաթիվ</th>
                                                <th scope="col">Կարգավիճակ</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($quize)){ ?>
                                                <?php foreach ($quize as $item){ ?>
                                                    <tr data-id="<?php echo $item['id'];?>">
                                                        <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                            <?php  if($item['status'] == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item['id'];?></td>
                                                        <td scope="col">
                                                            <?php echo $item['username'];?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item['email'];?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item['name_am'];?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item['result'];?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item['phone'];?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if(empty($item['user_id'])){
                                                                echo 'Ոչ';
                                                            }else{
                                                                echo 'Այո';
                                                            }?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item['date'];?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php if($item['status'] == 1){
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

