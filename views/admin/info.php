<!-- Harut-->
<input type="hidden" data-page='Info' id="page">
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
                        <h4 class="box-title">Կայքի տվյալներ
                            <span class="buttons">
                                <button class="btn btn-sm btn-default" id="editeInfo"><i class="fa fa-pencil"></i></button>
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
                                                <th scope="col">Գործընկեր</th>
                                                <th scope="col">Ապրանքներ</th>
                                                <th scope="col">Ծրագրեր</th>
                                                <th scope="col">facebook-ի հղում</th>
                                                <th scope="col">instagram-ի հղում</th>
                                                <th scope="col">linkedin-ի հղում</th>
                                                <th scope="col">Էլ. հասցե</th>
                                                <th scope="col">Հեռախոսահամար</th>
                                            </tr>
                                            </thead>
                                            <tbody class="sortableTable" id="sortable">
                                            <?php if(!empty($info)){ ?>
                                                <?php foreach ($info as $item){ ?>
                                                    <tr data-id="<?php echo $item->id;?>">
                                                        <td scope="col">
                                                            <?php  if($item->status == 0){
                                                                echo '<i class="fa fa-close" style="color:red;"></i>';
                                                            } ?>
                                                            ID <?php echo $item->id;?></td>
                                                        <td scope="col">
                                                            <?php echo $item->partner;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->products;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->programms;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->facebook_link;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->instagram_link;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->linkdin_link;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->infoexpert_email;?>
                                                        </td>
                                                        <td scope="col">
                                                            <?php echo $item->phone_number;?>
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

    <div class="modals">

    </div>
</div>
<style>
    .is_types span{
        padding-right:10px;
    }
</style>
