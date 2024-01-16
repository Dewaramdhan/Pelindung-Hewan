<?php
include 'app/post/post_data_kependudukan.php';
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-hands-helping"></i> Klasifikasi Bantuan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Klasifikasi Bantuan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Penerima Bantuan</h3>
                        <div class="card-tools">
                            <a href="<?= $base_url ?>app/print/cetak_penerima_bantuan.php" target="_blank" class="btn btn-success">
                                <i class="fas fa-print"></i> Print
                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table class="table table-bordered table-striped example2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. KK</th>
                                    <th>No. KTP</th>
                                    <th>Kepala Keluarga</th>
                                    <th>Jenis Bantuan</th>
                                    <th>Tgl Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Dusun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                tampil_penerima($mysqli);
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>