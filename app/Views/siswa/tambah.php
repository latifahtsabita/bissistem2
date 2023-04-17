<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="my-3"><?= $title; ?></h2>
            <form action="/siswa/save" method="post">

                <div class="card mb-3">
                    <div class="card-header">
                        Data Peserta Didik
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nis" name="nis" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-row mb-3">

                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                </div>

                                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>

                            </div>
                            <div class="form-row mb-3">
                                <label for="j_k" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <select class="form-select col-sm-4">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>

                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="agama" name="agama">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label for="status_dlm_kel" class="col-sm-2 col-form-label">Status dalam Keluarga</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="status_dlm_kel" name="status_dlm_kel">
                                </div>

                                <label for="anak_ke" class="col-sm-2 col-form-label">Anak ke-</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="anak_ke" name="anak_ke">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                                </div>

                                <label for="file_foto" class="col-sm-2 col-form-label">Upload Foto</label>
                                <div class="input-group col-sm-4">
                                    <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                                    <input type="file" class="form-control" id="inputGroupFile01">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Example checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>

                    </div>


                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        Data Kependudukan
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nis" name="nis" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                </div>

                                <label for="tgl_lahir" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>

                            </div>
                            <div class="form-row mb-3">

                                <label for="agama" class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="agama" name="agama">
                                </div>
                                <label for="j_k" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <select class="form-select col-sm-4">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>

                    </div>


                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        Keterangan Kesehatan
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nis" name="nis" autofocus>
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Golongan Darah</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                </div>

                                <label for="tgl_lahir" class="col-sm-2 col-form-label">Penyakit yang diderita</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>

                            </div>
                            <div class="form-row mb-3">
                                <label for="kelainan_jasmani" class="col-sm-2 col-form-label">Kelainan Jasmani</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="kelainan_jasmani" name="kelainan_jasmani">
                                </div>
                                <label for="berat_bdn" class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="berat_bdn" name="berat_bdn">
                                </div>
                                <label for="tinggi_bdn" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>