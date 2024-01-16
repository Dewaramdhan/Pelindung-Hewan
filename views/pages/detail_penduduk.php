<?php $nik = $_GET['id'];
error_reporting(0);
include 'app/post/post_data_kependudukan.php'; ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3><i class="nav-icon fas fa-user"></i> Detail Data Kependudukan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data Kependudukan</li>
                    <li class="breadcrumb-item">Detail Data Penduduk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?php
$query = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_konsumsi ON tabel_kependudukan.NIK = tabel_konsumsi.NIK JOIN tabel_pekerjaan ON tabel_kependudukan.NIK = tabel_pekerjaan.NIK JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK JOIN tabel_tabungan ON tabel_kependudukan.NIK = tabel_tabungan.NIK WHERE tabel_kependudukan.NIK = '$nik'");
$row = $query->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <a href="../data_kependudukan" class="btn text-light" style="background-color: #042165;"><i
                class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header" style="background-color: #042165;">
                        <h3 class="card-title text-white">Data Individu</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No KK :</label>
                                    <div class="text-primary">
                                        <?= $row['NO_KK'] ?>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="">NIK</label>
                                    <div class="text-primary">
                                        <?= $row['NIK'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <div class="text-primary">
                                        <?= $row['NAMA_LGKP'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="text-primary">
                                        <?= $row['JK'] == '1' ? 'Laki Laki' : 'Perempuan' ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat Lahir</label>
                                    <div class="text-primary">
                                        <?= $row['TMPT_LHR'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <div class="text-primary">
                                        <?= tgl_indo($row['TGL_LHR']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Agama</label>
                                    <div class="text-primary">
                                        <?= $row['AGAMA'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hubungan Keluarga</label>
                                    <div class="text-primary">
                                        <?php
                                        if ($row['HBKEL'] == '1') {
                                            echo 'Kepala Keluarga';
                                        } else if ($row['HBKEL'] == '3') {
                                            echo "Istri";
                                        } else {
                                            echo "Anak";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Ayah</label>
                                    <div class="text-primary">
                                        <?= $row['NAMA_LGKP_AYAH'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Ibu</label>
                                    <div class="text-primary">
                                        <?= $row['NAMA_LGKP_IBU'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Terakhir</label>
                                    <div class="text-primary">
                                        <?= $row['PENDIDIKAN_TERAKHIR'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Utama</label>
                                    <div class="text-primary">
                                        <?= $row['PEKERJAAN'] ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Penghasilan Per Bulan</label>
                                    <div class="text-primary">Rp.
                                        <?= number_format($row['PENGHASILAN_PER_BULAN']) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Dusun</label>
                                    <div class="text-primary">
                                        <?= $row['DSN'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="card">
        <div class="card-header" style="background-color: #042165;">
            <h3 class="card-title text-white">Data Bantuan</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-auto">
                    <div class="form-group">
                        <label>Penerima Bantuan?</label><br>
                        <div class="text-primary">
                            <?php
                            if ($row2['bantuan'] == '0') {
                                echo 'Tidak';
                            } else if ($row2['bantuan'] == '1') {
                                echo "Ya";
                            } else {
                                echo "Tidak";
                            }
                            ?>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Jenis Bantuan</label>
                        <div class="text-primary">
                            <?php
                            if ($row2['jenis_bantuan'] == '' || $row2['jenis_bantuan'] == '--Pilih Jenis Bantuan--') {
                                echo 'Tidak Memiliki Bantuan';
                            } else {
                                echo $row2['jenis_bantuan'];
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
</section>