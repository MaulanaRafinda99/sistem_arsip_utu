<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Arsip Dihapus</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php">Home</a> <span class="bread-slash">/</span></li>
                                <li><a href="arsip_saya.php">Data Arsip Dihapus</a><span class="bread-blod"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Arsip Dihapus</h3>
        </div>
        <div class="panel-body">

            <br>
            <br>
            <br>

            <center>
                <?php
                if (isset($_GET['alert'])) {
                    switch ($_GET['alert']) {
                        case "gagal":
                            echo '<div class="alert alert-danger">Gagal memulihkan data arsip dipilih.</div>';
                            break;
                        case "sukses":
                            echo '<div class="alert alert-success">Hapus Permanen Berhasil!</div>';
                            break;
                        default:
                            echo '<div class="alert alert-success">Berhasil memulihkan data arsip dipilih!</div>';
                    }
                }
                ?>
            </center>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Waktu Upload</th>
                        <th>Arsip</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th class="text-center" width="20%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $saya = $_SESSION['id'];

                    $arsip = mysqli_query($koneksi, "SELECT * FROM arsip,kategori WHERE arsip_petugas = $saya AND arsip_kategori = kategori_id AND arsip_status = 'TRASH' ORDER BY arsip_id DESC");
                    while ($p = mysqli_fetch_array($arsip)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y', strtotime($p['arsip_waktu_upload'])) ?></td>
                            <td>

                                <b>KODE</b> : <?php echo $p['arsip_kode'] ?><br>
                                <b>Nama</b> : <?php echo $p['arsip_nama'] ?><br>
                                <b>Jenis</b> : <?php echo $p['arsip_jenis'] ?><br>

                            </td>
                            <td><?php echo $p['kategori_nama'] ?></td>
                            <td><?php echo $p['arsip_keterangan'] ?></td>
                            <td class="text-center">



                                <div class="modal fade" id="exampleModal_<?php echo $p['arsip_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin ingin menghapus data arsip ini secara <span style="color: red;">PERMANEN ?</span> <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="arsip_hapus_permanen.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-danger" style="color: #fff;">Ya, Hapus <i class="fa fa-exclamation"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <a target="_blank" class="btn btn-primary" href="../arsip/<?php echo $p['arsip_file']; ?>"><i class="fa fa-download"></i></a>
                                <a href="arsip_restore.php?id=<?php echo $p['arsip_id']; ?>" class="btn btn-success"><i class="fa fa-undo" style="color: #fff;"></i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?php echo $p['arsip_id']; ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <style>
                th {
                    text-align: center;
                }
            </style>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>