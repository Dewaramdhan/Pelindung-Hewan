<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus-square"></i> Input Data Kependudukan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="data_kependudukan">Data Kependudukan</a></li>
                    <li class="breadcrumb-item active">Input Data Kependudukan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->

    <form action="data_kependudukan" method="POST">
        <a href="data_kependudukan" class="btn text-light" style="background-color: #042165;"><i
                class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        <div class="card mt-3">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Individu</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">No KK</label>
                            <input type="number" name="no_kk" class="form-control" id="" placeholder="Masukkan No.KK">
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" name="nik" class="form-control" id="" placeholder="Masukkan NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nm" class="form-control" id="" placeholder="Masukkan Nama Lengkap">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2" name="jk" style="width: 100%;">
                                <option hidden>--Pilih Jenis Kelamin--</option>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" class="form-control" id=""
                                placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control select2" name="agama" style="width: 100%;">
                                <option hidden>--Pilih Agama--</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="budha">Budha</option>
                                <option value="hindu">Hindu</option>
                                <option value="khonghucu">Khonghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Disabilitas ?</label>
                            <div style="margin-bottom:-9.5px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disabilitas" value="1">
                                    <label class="form-check-label">Ya</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disabilitas" value="0">
                                    <label class="form-check-label">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="formjkjk">
                            <div class="form-group">
                                <label>Hubungan Keluarga</label>
                                <select class="form-control select2 jkjk" name="hubkel" style="width: 100%;">
                                    <option hidden>--Pilih Hubungan Keluarga--</option>
                                    <option value="1">Kepala Keluarga</option>
                                    <option value="3">Istri</option>
                                    <option value="9">Anak</option>
                                    <option value="7">Kakek</option>
                                    <option value="6">Nenek</option>
                                    <option value="4">Family Lain</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" name="nm_ayah" class="form-control" id=""
                                placeholder="Masukkan Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" name="nm_ibu" class="form-control" id="" placeholder="Masukkan Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control select2" name="pend_terakhir" style="width: 100%;">
                                <option hidden>--Pilih Pendidikan--</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                                <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                                <option value="SD dan Sederajat">SD dan Sederajat</option>
                                <option value="SMP dan Sederajat">SMP dan Sederajat</option>
                                <option value="SMA dan Sederajat">SMA dan Sederajat</option>
                                <option value="Diploma 1-3">Diploma 1-3</option>
                                <option value="S1 dan Sederajat">S1 dan Sederajat</option>
                                <option value="S2 dan Sederajat">S2 dan Sederajat</option>
                                <option value="S3 dan Sederajat">S3 dan Sederajat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Utama</label>
                            <select class="form-control select2" name="pekerjaan" style="width: 100%;">
                                <option hidden>--Pilih Pekerjaan--</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Petani">Petani</option>
                                <option value="Buruh Tani">Buruh Tani</option>
                                <option value="Buruh Bangunan">Buruh Bangunan</option>
                                <option value="Buruh Perkebunan">Buruh Perkebunan</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Guru">Guru</option>
                                <option value="Pedagang Besar">Pedagang Besar</option>
                                <option value="Pedagang Kecil">Pedagang Kecil</option>
                                <option value="Pengolahan/Industri">Pengolahan/Industri</option>
                                <option value="PNS">PNS</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Perangkat Desa">Perangkat Desa</option>
                                <option value="TKI">TKI</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Penghasilan Per Bulan</label>
                            <input type="number" name="penghasilan" class="form-control" id=""
                                placeholder="Penghasilan Per Bulan  ">
                        </div>
                        <div class="form-group">
                            <label for="">RW</label>
                            <select class="form-control select2" name="dusun" style="width: 100%;">
                                <option hidden>--Pilih RW--</option>
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
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" style="background-color: #042165;">
                <h3 class="card-title text-white">Data Bantuan</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <div class="form-group">
                            <label>Penerima Bantuan?</label><br>
                            <div class="form-check-inline mt-2">
                                <label class="form-check-label">
                                    <input type="radio" name="penerima_bantuan" class="form-check-input" value="0">Tidak
                                </label>
                            </div>
                            <div class="form-check-inline mt-2">
                                <label class="form-check-label">
                                    <input type="radio" name="penerima_bantuan" class="form-check-input" value="1">Ya
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Bantuan</label>
                            <select class="form-control select ceks" name="jenis_bantuan" style="width: 100%;">
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
        </div>

        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="submit" name="simpan_data" class="btn btn-block btn-success float-right"><i
                        class="fas fa-save"></i> Simpan Data</button>
            </div>
        </div>
    </form>
</section>