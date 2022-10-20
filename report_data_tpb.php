<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
include "include/cssDatatables.php";

$NomorPengajuan = '';
$NoBC27 = '';
$TanggalMasukOne = '';
$TanggalMasukTwo = '';
$TanggalKeluarOne = '';
$TanggalKeluarTwo = '';
$NamaPenerimaBarang = '';
$KodeNegara = '';
$NamaNegara = '';
$NoContainer = '';
$MataUang = '';

// API - 
include "include/api.php";
if (isset($_POST['FindNomorPengajuan'])) {
    $NomorPengajuan   = $_POST['NomorPengajuan'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_NomorPengajuan&NomorPengajuan=' . $_POST['NomorPengajuan']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindNoBC27'])) {
    $FindNoBC27   = $_POST['FindNoBC27'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_NoBC27&FindNoBC27=' . $_POST['FindNoBC27']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindTglMasuk'])) {
    $TanggalMasukOne   = $_POST['TanggalMasukOne'];
    $TanggalMasukTwo   = $_POST['TanggalMasukTwo'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_TglMasuk&TanggalMasukOne=' . $_POST['TanggalMasukOne'] . '&TanggalMasukTwo=' . $_POST['TanggalMasukTwo']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindTglKeluar'])) {
    $TanggalKeluarOne   = $_POST['TanggalKeluarOne'];
    $TanggalKeluarTwo   = $_POST['TanggalKeluarTwo'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_TglKeluar&TanggalKeluarOne=' . $_POST['TanggalKeluarOne'] . '&TanggalKeluarTwo=' . $_POST['TanggalKeluarTwo']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindNamaPenerimaBarang'])) {
    $NamaPenerimaBarang   = $_POST['NamaPenerimaBarang'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_NamaPenerimaBarang&NamaPenerimaBarang=' . $_POST['NamaPenerimaBarang']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindNegara'])) {
    $KodeNegara   = $_POST['KodeNegara'];
    $NamaNegara   = $_POST['NamaNegara'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_NamaNegara&KodeNegara=' . $_POST['KodeNegara'] . '&NamaNegara=' . $_POST['NamaNegara']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindContainer'])) {
    $NoContainer   = $_POST['NoContainer'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_NoContainer&NoContainer=' . $_POST['NoContainer']);
    $data = json_decode($content, true);
}

if (isset($_POST['FindMataUang'])) {
    $MataUang   = $_POST['MataUang'];

    $content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?function=get_Matauang&MataUang=' . $_POST['MataUang']);
    $data = json_decode($content, true);
}
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
                        <i class="fas fa-filter"></i> Filter Data TPB Sarinah
                    </h4>
                    <a href="report_data_tpb.php" type="button" class="label label-default"
                        style="padding: 2px;margin-top: 2px;margin-right: 5px;">
                        <i class="fa fa-refresh"></i> Reset
                    </a>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class=" panel-body text-inverse">
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <!-- Nomor Pengajuan Sarinah (NOMOR_AJUAJU) -->
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Nomor Pengajuan</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="NomorPengajuan"
                                        placeholder="Nomor Pengajuan ..." value="<?= $NomorPengajuan ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindNomorPengajuan">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <!-- Nomor BC 2.7 -->
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">No. BC. 27</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="NoBC27" placeholder="No. BC. 27 ..."
                                        value="<?= $NoBC27 ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindNoBC27">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <!-- Tanggal Masuk -->
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Tanggal Masuk</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="TanggalMasukOne"
                                        placeholder="Tanggal Masuk ..." value="<?= $TanggalMasukOne ?>">
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <font>s.d</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="TanggalMasukTwo"
                                        placeholder="Tanggal Masuk ..." value="<?= $TanggalMasukTwo ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindTglMasuk">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <!-- Tanngall Keluar -->
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Tanggal Keluar</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="TanggalKeluarOne"
                                        placeholder="Tanggal Keluar ..." value="<?= $TanggalKeluarOne ?>">
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <font>s.d</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" name="TanggalKeluarTwo"
                                        placeholder="Tanggal Keluar ..." value="<?= $TanggalKeluarTwo ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindTglKeluar">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Nama Penerima Barang</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="NamaPenerimaBarang"
                                        placeholder="Nama Penerima Barang ..." value="<?= $NamaPenerimaBarang ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindNamaPenerimaBarang">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Kode Negara / Nama Negara Supplier</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="KodeNegara"
                                        placeholder="Kode Negara ..." value="<?= $KodeNegara ?>">
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <font>/</font>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" name="NamaNegara"
                                        placeholder="Nama Negara ..." value="<?= $NamaNegara ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindNegara">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformone" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">No. Container</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="NoContainer"
                                        placeholder="No. Container ..." value="<?= $NoContainer ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindContainer">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="F-MataUang" method="POST">
                        <fieldset>
                            <div class="form-group row m-b-15" style="align-items: center;">
                                <label class="col-md-3 col-form-label">Mata Uang</label>
                                <div class="col-md-1">
                                    <font class="titik-dua">:</font>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="MataUang" placeholder="Mata Uang ..."
                                        value="<?= $MataUang ?>">
                                </div>
                                <div class="col-md-2" id="OKEBTN">
                                    <button type="submit" class="btn btn-info m-r-5" name="FindMataUang">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div style="background: #4c4747;height: 4px;width: 100%;margin: 15px -1px;box-sizing: border-box;">
                    </div>
                    <div class="form-group row m-b-15" style="align-items: center;">
                        <div class="col-md-3" id="OKEBTN">
                            <a href="report_data_tpb.php" class="btn btn-yellow m-r-5">
                                <i class="fa fa-refresh"></i> Reset
                            </a>
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> Data TPB - Sarinah / Master Data</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <div class="table-responsive">
                        <table id="TableDataTPB" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th colspan="4" style="text-align:center">BC.27 PLB</th>
                                    <th colspan="4" style="text-align:center">BC.27 Sarinah</th>
                                    <th rowspan="2" style="text-align:center">KD / Negara</th>
                                    <th rowspan="2" style="text-align:center">Supplier</th>
                                    <th rowspan="2" style="text-align:center">Jumlah Barang</th>
                                    <th rowspan="2" style="text-align:center">Party</th>
                                    <th rowspan="2" style="text-align:center">Valas</th>
                                    <th rowspan="2" style="text-align:center">Nilai Total</th>
                                    <th colspan="3" style="text-align:center">Tujuan</th>
                                    <th rowspan="2" style="text-align:center">Tanggal Masuk Barang</th>
                                    <th rowspan="2" style="text-align:center">Tanggal Keluar Barang</th>
                                    <th rowspan="2" style="text-align:center">Cont. Details</th>
                                </tr>
                                <tr>
                                    <!-- PLB -->
                                    <th style="text-align:center">No. Pengajuan</th>
                                    <th style="text-align:center">Tanggal Input</th>
                                    <th style="text-align:center">No. Daftar</th>
                                    <th style="text-align:center">Tanggal Daftar</th>
                                    <!-- Sarinah -->
                                    <th style="text-align:center">No. AJU</th>
                                    <th style="text-align:center">Tanggal Input</th>
                                    <th style="text-align:center">No. Daftar</th>
                                    <th style="text-align:center">Tanggal Daftar</th>
                                    <!-- Tujuan -->
                                    <th style="text-align:center">NPWP</th>
                                    <th style="text-align:center">Nama</th>
                                    <th style="text-align:center">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($data['status'] == 404) { ?>
                                <tr>
                                    <td colspan="20">
                                        <center>
                                            <div style="display: flex;justify-content: center; align-items: center">
                                                <i class="fas fa-filter"></i>&nbsp;&nbsp;Filter Data
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                                <?php } else { ?>
                                <?php $no = 0; ?>
                                <?php foreach ($data['result'] as $row) { ?>
                                <?php $no++; ?>
                                <tr>
                                    <td><?= $no ?>.</td>
                                    <td><?= $row['NOMOR_AJU']; ?></td>
                                </tr>
                                <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
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