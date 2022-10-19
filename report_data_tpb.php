<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/top-sidebar.php";
include "include/cssDatatables.php";

// API - 
include "include/api.php";
$content = get_content($resultAPI['url_api'] . 'reportDataTPB.php?where=' . $_where);
$data = json_decode($content, true);
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
                    <fieldset>
                        <!-- <div class="form-group row" style="justify-content: flex-end;">
                            <div class="col-md-7 offset-md-3">
                                <a href="report_data_tpb.php" type="button" class="btn btn-yellow m-r-5">
                                    <i class="fa fa-refresh"></i> Reset
                                </a>
                            </div>
                        </div> -->
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
                                <?php
                                if (isset($_POST["findOne"])) {
                                    function where_add($_wh, $_add)
                                    {
                                        $wh = '';
                                        if ($wh == '') {
                                            return 'WHERE ' . $_add;
                                        } else {
                                            return $_wh . ' AND ' . $_add;
                                        }
                                    }
                                    $i = 1;
                                    $_where = '';
                                    $i = 1;
                                    $_where = '';
                                    if ($NoPengajuan == true) {
                                        $_where = where_add($_where, ' tpb.NOMOR_AJU LIKE ' . "'%$NoPengajuan%'" . '');
                                    }
                                    if ($NoBC27 == true) {
                                        $_where = where_add($_where, ' tpb.NOMOR_DAFTAR LIKE ' . "'%$NoBC27%'" . '');
                                    }
                                    if ($NoBC27 == true) {
                                        $_where = where_add($_where, ' tpb.TANGGAL_DAFTAR BETWEEN "' . $TanggalBC27One . '" AND "' . $TanggalBC27Two . '"');
                                    }
                                    if ($Supplier == true) {
                                        $_where = where_add($_where, ' tpb.NAMA_PEMASOK LIKE ' . "'%$Supplier%'" . '');
                                    }
                                    if ($KodeNegara == true) {
                                        $_where = where_add($_where, ' tpb.KODE_NEGARA_PEMASOK LIKE ' . "'%$KodeNegara%'" . '');
                                    }
                                    if ($NamaNegara == true) {
                                        $_where = where_add($_where, ' ngr.URAIAN_NEGARA LIKE ' . "'%$NamaNegara%'" . '');
                                    }
                                    if ($Party == true) {
                                        $_where = where_add($_where, ' kem.JUMLAH_KEMASAN LIKE ' . "'%$Party%'" . '');
                                    }
                                    if ($NoContainer == true) {
                                        $_where = where_add($_where, ' kon.NOMOR_KONTAINER LIKE ' . "'%$NoContainer%'" . '');
                                    }
                                    if ($MataUang == true) {
                                        $_where = where_add($_where, ' tpb.KODE_VALUTA LIKE ' . "'%$MataUang%'" . '');
                                    }
                                    if ($TanggalMasukBarangOne == true) {
                                        $_where = where_add($_where, ' tpb.TANGGAL_BC11 BETWEEN "' . $TanggalMasukBarangOne . '" AND "' . $TanggalMasukBarangTwo . '"');
                                    }
                                    if ($TanggalKeluarBarangOne == true) {
                                        $_where = where_add($_where, ' tpb.TANGGAL_BC11 BETWEEN "' . $TanggalKeluarBarangOne . '" AND "' . $TanggalKeluarBarangTwo . '"');
                                    }

                                    echo $_where;
                                    $result2 = mysqli_query($dbcon, "SELECT *
                                                                  FROM tpb_header AS tpb
                                                                 LEFT OUTER JOIN tpb_kemasan AS kem ON tpb.ID=kem.ID_HEADER
                                                                 LEFT OUTER JOIN referensi_kemasan AS ref_kem ON kem.KODE_JENIS_KEMASAN=ref_kem.KODE_KEMASAN
                                                                 LEFT OUTER JOIN referensi_negara AS ngr ON tpb.KODE_NEGARA_PEMASOK=ngr.KODE_NEGARA
                                                                 LEFT OUTER JOIN referensi_pengusaha AS peng ON tpb.NAMA_PENERIMA_BARANG=peng.NAMA
                                                                 LEFT OUTER JOIN tpb_kontainer AS kon ON tpb.ID=kon.ID_HEADER
                                                                 $_where
                                                                --  WHERE tpb.TANGGAL_BC11 BETWEEN '2018-05-18' AND '2022-08-08'
                                                                 GROUP BY kon.ID_HEADER
                                                                 ORDER BY tpb.NOMOR_AJU ASC");
                                } else {
                                    $result2 = mysqli_query($dbcon, "SELECT *
                                                                 FROM tpb_header AS tpb
                                                                 LEFT OUTER JOIN tpb_kemasan AS kem ON tpb.ID=kem.ID_HEADER
                                                                 LEFT OUTER JOIN referensi_kemasan AS ref_kem ON kem.KODE_JENIS_KEMASAN=ref_kem.KODE_KEMASAN
                                                                 LEFT OUTER JOIN referensi_negara AS ngr ON tpb.KODE_NEGARA_PEMASOK=ngr.KODE_NEGARA
                                                                 LEFT OUTER JOIN referensi_pengusaha AS peng ON tpb.NAMA_PENERIMA_BARANG=peng.NAMA
                                                                 LEFT OUTER JOIN tpb_kontainer AS kon ON tpb.ID=kon.ID_HEADER
                                                                 GROUP BY kon.ID_HEADER
                                                                 ORDER BY tpb.NOMOR_AJU ASC");
                                }
                                ?>
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
                                <?php $no++;
                                        // FOR TANGGAL INPUT PLB
                                        $TPB_YYMMDD = SUBSTR($row2['TPB_NOMOR_AJU'], 12, 8);
                                        $TPB_YY = SUBSTR($TPB_YYMMDD, 0, 4);
                                        $TPB_MM = SUBSTR($TPB_YYMMDD, 4, 2);
                                        $TPB_DD = SUBSTR($TPB_YYMMDD, 6, 2);
                                        // FOR TANGGAL INPUT TPB
                                        $TPB_YYMMDD = SUBSTR($row2['TPB_NOMOR_AJU'], 12, 8);
                                        $TPB_YY = SUBSTR($TPB_YYMMDD, 0, 4);
                                        $TPB_MM = SUBSTR($TPB_YYMMDD, 4, 2);
                                        $TPB_DD = SUBSTR($TPB_YYMMDD, 6, 2);
                                        echo "<tr>";
                                        echo "<td>" . $row2['TPB_NOMOR_AJU'] . "</td>";
                                        echo "<td>" . $TPB_YY . "-" . $TPB_MM . "-" . $TPB_DD . "</td>";
                                        echo "<td>" . $row2['TPB_NOMOR_DAFTAR'] . "</td>";
                                        echo "<td>" . $row2['TPB_TANGGAL_DAFTAR'] . "</td>";
                                        echo "<td>" . $row2['TPB_NOMOR_AJU'] . "</td>";
                                        echo "<td>" . $TPB_YY . "-" . $TPB_MM . "-" . $TPB_DD . "</td>";
                                        echo "<td>" . $row2['TPB_NOMOR_DAFTAR'] . "</td>";
                                        echo "<td>" . SUBSTR($row2['TPB_TANGGAL_DAFTAR'], 0, 10) . "</td>";
                                        echo "<td>" . $row2['KODE_NEGARA_PEMASOK'] . "/" . $row2['URAIAN_NEGARA'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PEMASOK'] . "</td>";
                                        echo "<td>" . $row2['JUMLAH_BARANG'] . "</td>";
                                        echo "<td>" . $row2['JUMLAH_KEMASAN'] . " " . $row2['URAIAN_KEMASAN'] . " " . $row2['MEREK_KEMASAN'] . "</td>";
                                        echo "<td>" . $row2['KODE_VALUTA'] . "</td>";
                                        echo "<td>" . $row2['CIF'] . "</td>";
                                        echo "<td>" . $row2['NPWP'] . "</td>";
                                        echo "<td>" . $row2['NAMA_PENERIMA_BARANG'] . "</td>";
                                        echo "<td>" . $row2['ALAMAT_PENERIMA_BARANG'] . "</td>";
                                        if ($row2['TPB_TANGGAL_BC11'] == NULL || $row2['TPB_TANGGAL_BC11'] == '') {
                                            echo "<td style='text-align: center;color: red'><i>Belum ada tanggal</i></td>";
                                        } else {
                                            echo "<td>" . $row2['TPB_TANGGAL_BC11'] . "</td>";
                                        }
                                        if ($row2['TPB_TANGGAL_BC11'] == NULL || $row2['TPB_TANGGAL_BC11'] == '') {
                                            echo "<td style='text-align: center;color: red'><i>Belum ada tanggal</i></td>";
                                        } else {
                                            echo "<td>" . SUBSTR($row2['TPB_TANGGAL_BC11'], 0, 10) . "</td>";
                                        }
                                        ?>
                                <td>
                                    <a href="#kontainer<?= $row2['TPB_ID'] ?>" class="btn btn-primary"
                                        data-toggle="modal" title="Cont. Details"><i class="fas fa-box"></i> Cont.
                                        Details</a>
                                </td>
                                <?php
                                        echo "</tr>";
                                        ?>

                                <!-- Cont. Details -->
                                <div class="modal fade" id="kontainer<?= $row2['TPB_ID'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="" method="POST">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">[Cont. Details <?= $row2['TPB_ID'] ?>] No.
                                                        Pengajuan - <?= $row2['TPB_NOMOR_AJU'] ?></h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <?php
                                                                        $contDet = mysqli_query($dbcon, "SELECT * FROM tpb_kontainer WHERE ID_HEADER = '$row2[TPB_ID]' ");
                                                                        if (mysqli_num_rows($contDet) > 0) {
                                                                            $nocont = 0;
                                                                            while ($cont = mysqli_fetch_array($contDet)) {
                                                                                $nocont++;
                                                                        ?>
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
                                                                <?php }
                                                                        } else {
                                                                            ?>
                                                                <div
                                                                    style="padding: 10px;font-weight: 700;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;background: #ddd;">
                                                                    <center>
                                                                        <div style="display: grid;">
                                                                            <i class="far fa-times-circle no-data"></i>
                                                                            Tidak ada data
                                                                        </div>
                                                                    </center>
                                                                </div>
                                                                <?php
                                                                        }
                                                                        ?>
                                                                <div class="form-group">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i
                                                            class="fas fa-times-circle"></i> Tutup</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Cont. Details -->
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