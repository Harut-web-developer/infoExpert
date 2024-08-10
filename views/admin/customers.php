<input type="hidden" data-page='Partners' id="page">
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
    <div class="products">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Հաճախորդներ
                            <span class="buttons">
                                          <span class="overlay show_" style="width:33px;"></span>
                                          <button class="btn btn-sm btn-default" id="editeCustomer"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-sm btn-danger" id="disableCustomer"><i class="fa fa-trash"></i></button>
                                        </span>
                                <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-succ fl" style="margin-left:10px;"><i class="bx bx-plus me-1"></i> Ավելացնել</a>
                            <?php if(!isset($_GET['search'])){ ?>
                                <a href="#" data-toggle="modal" data-target="#search" class="btn btn-succ fl"><i class="fa fa-search"></i></a>
                            <?php } else { ?>
                                <a href="/admin/customers" class="btn btn-succ fl" style="padding:5px;"><img src="/web/images/searchclose.png" alt="" width="25"></a>
                            <?php } ?>

                        </h4>
                    </div>
                    <div class="card-body--">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                        <div class="tbl">
                                            <table class="table table-bordered ">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Նկար</th>
                                                    <th scope="col">Անուն/Ազգանուն</th>
                                                    <th scope="col">Էլ. հասցե</th>
                                                    <th scope="col">Հեռախոս</th>
                                                    <th scope="col">Հաստատված</th>
                                                    <th scope="col">Ստեղծման ամսաթիվ</th>
                                                </tr>
                                                </thead>
                                                <tbody class="sortableTable" id="sortable">
                                                <?php if(!empty($users)){ ?>
                                                    <?php foreach ($users as $user){ ?>
                                                        <tr data-id="<?php echo $user->id;?>" <?php if($user->status==0){ echo 'style="background:orange;"';}?>>
                                                            <td scope="col"><span class="move"><i class="fa fa-arrows-alt"></i></span>
                                                                <?php  if($user->status == 0){
                                                                    echo '<i class="fa fa-close" style="color:red;"></i>';
                                                                } ?>
                                                                ID <?php echo $user->id;?></td>
                                                            <td scope="col">
                                                                <?php if(!empty($user->image)){?>
                                                                    <img src="/<?php echo $user->image;?>" height="60" alt="">
                                                                <?php } ?>
                                                            </td>
                                                            <td scope="col"><?php echo $user->username;?></td>
                                                            <td scope="col"><?php echo $user->email;?></td>
                                                            <td scope="col"><?php echo $user->phone;?></td>
                                                            <td scope="col"> <?php if( $user->status){ echo 'Այո';} else { echo 'Ոչ';}?></td>
                                                            <td scope="col"><?php echo $user->created_at;?></td>
                                                        </tr>
                                                    <?php }} ?>
                                                </tbody>
                                            </table>
<!--                                             <button class="left"><i class="fa fa-arrow-left" aria-hidden="true"></i></button><button class="right"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>-->
                                        </div>
                                        <?php if(!isset($_GET['search'])){ ?>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <?php $pages = ceil(intval($total)/10); ?>
                                                    <?php if(isset($_GET['page']) && intval($_GET['page'] )>0){ ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="/admin/customers?page=<?php echo intval($_GET['page'])-1;?>" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                    <?php
                                                    if(!isset($_GET['page'])){
                                                        $_GET['page'] = 0;
                                                    }
                                                    for ($i = 1; $i <= $pages; $i++){
                                                        if( $i == (intval($_GET['page'])+2) || $i == (intval($_GET['page'])+3) || $i == (intval($_GET['page'])-1)  ||  $i == (intval($_GET['page'])) ||  $i == intval($_GET['page'])+1) {
                                                            $class = '';
                                                            if($i == intval($_GET['page'])+1){
                                                                $class = 'active';
                                                            }
                                                            echo '<li class="page-item '.$class.'"><a class="page-link" href="/admin/customers?page=' . ($i-1).'">' . $i.'</a></li>';
                                                        }
                                                    } ?>
                                                    <?php if(isset($_GET['page']) && (intval($_GET['page'] )+1) < $pages){ ?>
                                                        <li class="page-item">
                                                            <a class="page-link" href="/admin/customers?page=<?php echo (intval($_GET['page'] )+1);?>" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    <?php } ?>
                                                    <li>
                                                    <li class="page-item"><a class="page-link" href="/admin/customers?page=all">Տեսնել ամբողջը</a></li>
                                                    </li>
                                                </ul>
                                            </nav>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    $f = 0;
    function display_list($nested_categories, $type = 'sortable', $level = 0)
    {
        foreach($nested_categories as $nested){
            $c ='';
            for ($i=0; $i < $level ; $i++) { $c = $c.'-';}
            $list .= '<option value="'.$nested['id'].'">'.$c.$nested['name'].' ('.$nested['atg'].')</option>';
            if( ! empty($nested['child'])){$list .= display_list($nested['child'],$type,$level+1);}
        }
        return $list;
    }
    ?>


    <!-- Modal -->
    <div class="modal fade add-new" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnew" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnew">Ավելացնել օգտատեր</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="FsUsers[is_buyer]" value="1">
                        <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />
                        <div class="row">
                            <div class="col-sm-12">
                                <span style="margin-bottom: 4px;color: #878787;">Նկար</span>
                                <input type="file" name="img">
                                <span style="margin-bottom: 4px;color: #878787;">Cv</span>
                                <input type="file" name="cv">
                                <span style="margin-bottom: 4px;color: #878787;">Անուն/ազգանուն *</span>
                                <input type="text" name="User[username]" placeholder="Անուն/ազգանուն" required class="form-control">
                                <span style="margin-bottom: 4px;color: #878787;">Էլ. հասցե *</span>
                                <input type="text" name="User[email]" placeholder="Էլ. հասցե" required class="form-control">
                                <span style="margin-bottom: 4px;color: #878787;">Հեռախոսահամար</span>
                                <input type="number" name="User[phone]" placeholder="Հեռախոսահամար" required class="form-control">
                                <span style="margin-bottom: 4px;color: #878787;">Linkedin_ի hղում</span>
                                <input type="text" name="User[linkdin_url]" placeholder="Linkedin_ի hղում" class="form-control">
                                <span style="margin-bottom: 4px;color: #878787;">Գաղտնաբառ *</span>
                                <input type="password" name="Users[password]" required placeholder="Գաղտնաբառ" class="form-control">
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                        <button type="submit" class="btn btn-succ" name="add" value="true">Գրանցել</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade search" id="search" tabindex="-1" role="dialog" aria-labelledby="search" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addnew">Որոնում</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="get" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="form-check form-check-inline frmfirst">
                                <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1" checked value="1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Սկզբում
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Վերջում
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="flexRadioDefault3" value="3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Մեջտեղում
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="flexRadioDefault4" value="4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    Պարունակում է
                                </label>
                            </div>
                            <br> <br>
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-succ">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="input1-group2" name="search" placeholder="ԱՆվանում" class="form-control">
                                </div>
                            </div>
                        </div>
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
    .left,.right{
        background:#1C5484;
        border-radius:0px;
        z-index:1000;
    }
</style>