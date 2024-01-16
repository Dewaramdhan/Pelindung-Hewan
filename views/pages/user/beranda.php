<?php
$sql_pria = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE JK='1'");
$sql_wanita = $mysqli->query("SELECT * FROM tabel_kependudukan WHERE JK='2'");
$sql_total = $mysqli->query("SELECT * FROM tabel_kependudukan");

$sql_belum_sekolah = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='Tidak Sekolah'");
$sql_tidak_tamat_sd = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='Tidak Tamat SD'");
$sql_sd = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='SD dan Sederajat'");
$sql_smp = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='SMP dan Sederajat'");
$sql_sma = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='SMA dan Sederajat'");
$sql_diploma = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='Diploma 1-3'");
$sql_s1 = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='S1 dan Sederajat'");
$sql_s2 = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='S2 dan Sederajat'");
$sql_s3 = $mysqli->query("SELECT * FROM tabel_kependudukan JOIN tabel_pendidikan ON tabel_kependudukan.NIK = tabel_pendidikan.NIK WHERE tabel_pendidikan.PENDIDIKAN_TERAKHIR='S3 dan Sederajat'");
// $total_ds1 = mysqli_num_rows($sql_diploma) + mysqli_num_rows($sql_s1);
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Kependudukan dan Bantuan Sosial</h1>
                <p style="text-align: justify;">
                    Sistem Kependudukan dan Bantuan Sosial atau bisa disingkat KBS merupakan suatu sistem yang dapat mengolah data kependudukan yang berada di <?= $row_profil->nama_desa; ?> menjadi Data Klasifikasi kependudukan dan Data Klasifikasi Bantuan.
                </p>
                <div>
                    <!-- tombol Lihat Daftar Penerima bantuan -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started scrollto">Lihat Daftar Penerima Bantuan</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="<?= $base_url; ?>asset_user/img/test 1@4x-8.png" class="img-fluid animated" alt="">
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pencarian Lebih Lengkap</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="filter" method="GET">
                        <div class="modal-body">
                            <!-- Dusun -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="pencarian_cek" class="col-form-label"><b>Pencarian Berdasarkan ?</b></label><br>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="pencarian" class="form-check-input" value="rekomendasi">
                                                Rekomendasi Penerima Bantuan
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="pencarian" class="form-check-input" value="penerima">
                                                Penerima Bantuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Tipe bantuan -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dusun" class="col-form-label"><b>Dusun</b></label>
                                        <select id="dusun" name="dusun" class="form-control">
                                            <option value="" hidden>Pilih Dusun</option>
                                            <?php
                                            $result_dusun = $mysqli->query("SELECT * FROM tabel_dusun");
                                            while ($rows_dusun = $result_dusun->fetch_object()) {
                                                echo "
                                                    <option value='$rows_dusun->id'>$rows_dusun->dusun</option>
                                                ";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis_bantuan" class="col-form-label"><b>Jenis Bantuan</b></label>
                                        <select id="jenis_bantuan" name="jenis_bantuan" class="form-control pencek">
                                            <option value="" hidden>--Pilih Jenis Bantuan--</option>
                                            <option value="BPNT">Bantuan Sembako (BPNT)</option>
                                            <option value="PKH">Bantuan PKH</option>
                                            <option value="BST">Bantuan Sosial Tunai (BST)</option>
                                            <option value="BLT">Bantuan Langsung Tunai Dana Desa (BLT-Dana Desa)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="terapkan" value="filter_data" class="btn text-light" style="background-color: #042165;">Terapkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- akhir modal -->

    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">



            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Cari Informasi Penerima Bantuan</h2>
                            <p></p>
                            <!-- pencarian -->
                            <form class="d-flex custom-search" action="search" method="GET">
                                <input class="form-control me-2" type="number" name="nik" placeholder="Masukan NIK Kepala Keluarga" aria-label="Search" required>
                                <!-- Tombol cari -->
                                <button class="btn text-light me-2" type="submit" style="background-color: #042165;">Cari</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-2 d-flex align-items-center justify-content-center about-img">
                <img src="<?= $base_url; ?>asset_user/img/pencarian.png" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
            <div class="text-center">
                <h6>Cari Informasi Penerima Bantuan</h6>
                <p>Untuk mengecek siapa saja yang menerima bantuan, Anda dapat memulai dengan Memasukkan NIK dari kepala keluarga yang ingin dicari.</p>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-2 d-flex align-items-center justify-content-center about-img pb-3">
                <img src="<?= $base_url; ?>asset_user/img/Artboard.png" style="width: 300px !important;" alt="" data-aos="zoom-in">
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 style="font-size: 1.5rem;">Klasifikasi Bantuan</h2>
                    <p>
                        Dalam pengklasifikasian bantuan, sistem ini menggunakan kriteria - kriteria yang berdasarkan keputusan
                        Menteri Sosial Republik Indonesia Nomor : 146 / HUK / 2013 tentang penetapan kriteria dan Pendataan Fakir
                        Miskin dan Orang Tidak Mampu terdiri atas 14 (empat belas) kriteria kemiskinan.

                    </p>
                </div>
            </div>
        </div>
   
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hubungi Kami</h2>
                <p>Hubungi kami untuk memulai</p>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Lokasi:</h4>
                                    <p><?= $row_profil->alamat; ?></p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><?= $row_profil->email; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="info">
                                <iframe src="<?= $row_profil->maps; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->