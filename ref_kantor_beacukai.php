<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-book icon-page"></i>
                <font class="text-page">Referensi</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index_viewonline.php">View Data Online</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Referensi</a></li>
                <li class="breadcrumb-item active">Kantor Bea Cukai</li>
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
            <div class="panel panel-inverse" data-sortable-id="ui-kantor-beacukai">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [Referensi] Kantor Bea Cukai</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th class="text-nowrap" style="text-align: center;">Kode Kantor</th>
                                    <th class="text-nowrap" style="text-align: center;">Uraian Kantor</th>
                                    <!-- <th class="text-nowrap">Aksi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $dataTable = $dbcon->query("SELECT * FROM referensi_kantor_pabean ORDER BY ID DESC");
                                if (mysqli_num_rows($dataTable) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataTable)) {
                                        $no++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                            <td style="text-align: center;">
                                                <?php if ($row['KODE_KANTOR'] == NULL || $row['KODE_KANTOR'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['KODE_KANTOR'] ?>
                                                <?php } ?>
                                            </td>
                                            <td style="text-align: left;">
                                                <?php if ($row['URAIAN_KANTOR'] == NULL || $row['URAIAN_KANTOR'] == '') { ?>
                                                    <font style="font-size: 8px;font-weight: 600;color: red"><i>Tidak Diisi!</i></font>
                                                <?php } else { ?>
                                                    <?= $row['URAIAN_KANTOR'] ?>
                                                <?php } ?>
                                            </td>
                                            <!-- <td>
                                                <a href="#updateData<?= $row['ID'] ?>" class="btn btn-sm btn-warning" data-toggle="modal" title="Update Data"><i class="fas fa-edit"></i></a>
                                                <a href="#deleteData<?= $row['ID'] ?>" class="btn btn-sm btn-danger" data-toggle="modal" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                            </td> -->
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="10">
                                            <center>
                                                <div style="display: grid;">
                                                    <i class="far fa-times-circle no-data"></i> Tidak ada data
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                <?php }
                                mysqli_close($dbcon); ?>
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