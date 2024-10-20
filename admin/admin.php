<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Admin</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Admin</span></li>
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
            <h3 class="panel-title">Data Admin</h3>
        </div>
        <div class="panel-body">


            <div class="pull-right">
                <a href="admin_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Admin</a>
            </div>
            <br>
            <br>
            <br>

            <center>
                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                ?>
                        <div class="alert alert-danger">Gagal Menambahkan Data Admin Baru</div>
                    <?php
                    } else {
                    ?>
                        <div class="alert alert-success">Berhasil Menambahkan Admin Sistem Arsip</div>
                <?php
                    }
                }
                ?>
            </center>
            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="5%">Foto</th>
                        <th>Nama Admin</th>
                        <th>Username</th>
                        <th class="text-center" width="10%">OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $admin = mysqli_query($koneksi, "SELECT * FROM admin ORDER BY admin_id DESC");
                    while ($p = mysqli_fetch_array($admin)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <?php
                                if ($p['admin_foto'] == "") {
                                ?>
                                    <img class="img-user" src="../gambar/sistem/user.png">
                                <?php
                                } else {
                                ?>
                                    <img class="img-user" src="../gambar/admin/<?php echo $p['admin_foto']; ?>">
                                <?php
                                }
                                ?>
                            </td>
                            <td><?php echo $p['admin_nama'] ?></td>
                            <td><?php echo $p['admin_username'] ?></td>

                            <!--Modal konfirmasi hapus admin  -->
                            <td class="text-center">
                                <div class="modal fade" id="exampleModal_<?php echo $p['admin_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data admin ini?<br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                <a href="admin_hapus.php?id=<?php echo $p['admin_id']; ?>" class="btn btn-danger" style="color:#fff">Ya. Hapus <i class="fa fa-exclamation"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="admin_edit.php?id=<?php echo $p['admin_id']; ?>" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_<?php echo $p['admin_id']; ?>">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>


                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>


    </div>
</div>


<?php include 'footer.php'; ?>