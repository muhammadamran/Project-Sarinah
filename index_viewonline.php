<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
// include "include/top-sidebar.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<style type="text/css">
.row-dinding {
    background: #fff;
    border-radius: 5px;
}

.svg-img-center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.images-svg {
    width: 635px;
}
</style>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-globe icon-page"></i>
                <font class="text-page">View Data Online</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Perusahaan: <?= $resultSetting['company']  ?></li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span
                    id=""><?= date_indo(date('Y-m-d'), TRUE) ?> - <font style="text-transform: uppercase;">
                        <?= date('h:m:i a') ?></font></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="row-dinding">
                        <div class="svg-img-center">
                            <img src="assets/img/svg/data-extraction-animate.svg" class="images-svg">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="widget widget-stats bg-teal">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TODAY'S VISITS</div>
                                    <div class="stats-number">7,842,900</div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 70.1%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (70.1%)</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6">
                            <div class="widget widget-stats bg-blue">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">TODAY'S PROFIT</div>
                                    <div class="stats-number">180,200</div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 40.5%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (40.5%)</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6">
                            <div class="widget widget-stats bg-indigo">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">NEW ORDERS</div>
                                    <div class="stats-number">38,900</div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 76.3%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (76.3%)</div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-md-6">
                            <div class="widget widget-stats bg-gray-900">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">NEW COMMENTS</div>
                                    <div class="stats-number">3,988</div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 54.9%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (54.9%)</div>
                                </div>
                            </div>
                        </div>

                        <!-- PLB -->
                        <div class="col-xl-6 col-md-6">
                            <div class="widget widget-stats bg-gray-900">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">NEW COMMENTS</div>
                                    <div class="stats-number">3,988</div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 54.9%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (54.9%)</div>
                                </div>
                            </div>
                        </div>
                        <!-- TPB -->
                        <div class="col-xl-6 col-md-6">
                            <div class="widget widget-stats bg-gray-900">
                                <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
                                <div class="stats-content">
                                    <div class="stats-title">NEW COMMENTS</div>
                                    <div class="stats-number">3,988</div>
                                    <div class="stats-progress progress">
                                        <div class="progress-bar" style="width: 54.9%;"></div>
                                    </div>
                                    <div class="stats-desc">Better than last week (54.9%)</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php
// include "include/panel.php";
include "include/footer.php";
include "include/jsDatatables.php";
?>