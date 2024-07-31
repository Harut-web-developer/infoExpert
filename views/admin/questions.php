<input type="hidden" data-page='Categories' id="page">
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
<!--  /Traffic -->
<div class="clearfix"></div>
<!-- Orders -->
<div class="orders">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Հարցաշար
                        <span class="buttons">
                                          <span class="overlay show_" style="width:33px;"></span>
                                          <button class="btn btn-sm btn-default" id="edite"><i class="fa fa-pencil"></i></button>
                                          <button class="btn btn-sm btn-danger" id="disable"><i class="fa fa-trash"></i></button>
                                        </span>
                        <a href="#" data-toggle="modal" data-target="#addnew" class="btn btn-succ fl" style="margin-left:10px;"><i class="bx bx-plus me-1"></i> Ավելացնել</a>
                    </h4>
                </div>
                <div class="card-body--">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <?php if(!empty($questions)){ ?>
                                        <?php echo display_list($questions);?>
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
    if($type == 'sortable'){
        if($f==0){
            $list = '<ul id="sortable" class="sortable list-unstyled" >';
        } else {
            $list = '<ul class="sortable list-unstyled" >';
        }
        $f++;
        foreach($nested_categories as $nested){
            $bg = '';
            if(isset($_GET['id']) && $_GET['id'] == 'key'.$nested['id']){
                $bg = 'style="background: #FAF9F9 !important;"';
            }
            $list .= '<li data-id="'.$nested['id'].'"  ><div class="block block-title" '.$bg.'>
                    <span class="move"><i class="fa fa-arrows-alt"></i></span>';
            if($nested['status'] == 0){
                $list .= '<i class="fa fa-close" style="color:red;"></i>';
            }

            $list .= '<b>'.$nested['name_am'].' <a style="float:right;" href="/admin/question?id='.$nested['id'].'">Հարցաշար</a>';
            $list .= '</b>';
            $list .= '</div>';

                $list .= '</li>';
        }
        $list .= '</ul>';
    }
    return $list;
}
?>


<!-- Modal -->
<div class="modal fade add-new" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnew" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addnew">Ավելացնել հարցաշար</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="Categories_">
                    <input type="hidden" name="<?= $this->renderDynamic('return Yii::$app->request->csrfParam;'); ?>" value="<?= $this->renderDynamic('return Yii::$app->request->csrfToken;'); ?>" />


                    <div class="custom-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Հայ</a>
                                <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Ռուս</a>
                                <a class="nav-item nav-link " id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Անգլ</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <br>
                            <div class="tab-pane fade active show" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                <div class="form-group ">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcQuestionList[name_am]" required placeholder="Անվանում" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcQuestionList[name_ru]" required placeholder="Անվանում" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                <div class="form-group">
                                    <span>Անվանում</span>
                                    <input type="text" name="AcQuestionList[name_en]" required placeholder="Անվանում" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
                    <button type="submit" class="btn btn-succ" name="add" value="true">Գրանցել</button>
                    <br>
                    <div class="info-bl"></div>
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



<script>
    setTimeout(function(){
        for (let i = 0; i < localStorage.length; i++) {
            jQuery('.'+localStorage.key(i)).closest('li').children('ul').addClass('show');
        }
    },500);


</script>


