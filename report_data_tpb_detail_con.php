<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
include "include/cssDatatables.php";

$contentCon = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_NomorPengajuanKon&ID=' . $_GET['ID']);
$dataCon = json_decode($contentCon, true);

?>
<style>
@media (max-width: 767.5px) {
    #OKEBTN {
        margin-top: 10px;
    }
}
</style>
<!-- begin #content -->
<div id="content" class="nav-top-content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-desktop icon-page"></i>
                <font class="text-page">Data TPB / Sarinah</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Index</a></li>
                <li class="breadcrumb-item"><a href="index_report.php">Report</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Data TPB</a></li>
                <li class="breadcrumb-item active">Sarinah Records</li>
                <li class="breadcrumb-item active">Cont. Details</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fas fa-filter"></i> Data Cont. Details TPB Sarinah - <?= $_GET['AJU']; ?>
                    </h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class=" panel-body text-inverse">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($dataCon['status'] == 404) { ?>
                                <div
                                    style="padding: 10px;font-weight: 700;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;background: #ddd;">
                                    <center>
                                        <div style="display: grid;">
                                            <i class="far fa-times-circle no-data"></i>
                                            Tidak ada data
                                        </div>
                                    </center>
                                </div>
                                <?php } else { ?>
                                <?php $no = 0; ?>
                                <?php foreach ($dataCon['result'] as $row) { ?>
                                <?php $no++ ?>
                                <div
                                    style="display: flex;justify-content: space-between;align-items: center;padding: 10px;font-weight: 700;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;background: #ddd;">
                                    <div style="display: grid;">
                                        <font>No.</font>
                                        <font style="font-weight: 400;"><?= $nocont; ?>.
                                        </font>
                                    </div>
                                    <div style="display: grid;">
                                        <font>Cont. Details</font>
                                        <font style="font-weight: 400;">
                                            <?= $cont['KODE_TIPE_KONTAINER']; ?> /
                                            <?= $cont['KODE_UKURAN_KONTAINER']; ?>
                                        </font>
                                    </div>
                                    <div style="display: grid;">
                                        <font>Cont. No</font>
                                        <font style="font-weight: 400;">
                                            <?= $cont['NOMOR_KONTAINER']; ?></font>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>

<script type="text/javascript">
// UPDATE SUCCESS
if (window?.location?.href?.indexOf('UploadSuccess') > -1) {
    Swal.fire({
        title: 'Data berhasil diupload!',
        icon: 'success',
        text: 'Data berhasil diupload didalam <?= $alertAppName ?>!'
    })
    history.replaceState({}, '', './report_ck5_tpb.php');
}
// UPDATE FAILED
if (window?.location?.href?.indexOf('UploadFailed') > -1) {
    Swal.fire({
        title: 'Data gagal diupload!',
        icon: 'error',
        text: 'Data gagal diupload didalam <?= $alertAppName ?>!'
    })
    history.replaceState({}, '', './report_ck5_tpb.php');
}

// TableDataTPB
$(document).ready(function() {
    $('#TableDataTPB').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
});
</script>