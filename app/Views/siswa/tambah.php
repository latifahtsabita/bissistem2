<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="my-3"><?= $title; ?></h2>
            <form action="/siswa/save" method="post">
                <form action="admin/tambahaksi" method="post">
                    <button type="submit" class="btn btn-primary mb-3">Tambah Data</button>

                    <div class="card mb-3">
                        <div class="card-header">
                            Data Peserta Didik
                        </div>
                        <div class="card-body">
                            
                                <form action="admin/tambahaksi" method="post">
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
                                    <select class="form-select col-sm-4" name="j_k" id="j_k">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
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

                                </form>
                            

                        </div>

                    </div>

                    <!-- <div class="card mb-3">
                        <div class="card-header">
                            Data Kependudukan
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                                    </div>

                                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                                    </div>
                                    <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            Keterangan Kesehatan
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row mb-3">
                                    <label for="gol_dar" class="col-sm-2 col-form-label">Golongan Darah</label>
                                    <select class="form-select col-sm-4" name="gol_dar" id="gol_dar">
                                        <option selected>Pilih Golongan Darah</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>

                                    <label for="penyakit" class="col-sm-2 col-form-label">Riwayat Penyakit</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="penyakit" name="penyakit">
                                    </div>

                                </div>
                                <div class="form-row mb-3">
                                    <label for="kelainan_jas" class="col-sm-2 col-form-label">Kelainan Jasmani</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="kelainan_jas" name="kelainan_jas">
                                    </div>
                                    <label for="bb" class="col-sm-2 col-form-label">Berat Badan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="bb" name="bb">
                                    </div>
                                    <label for="tb" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="tb" name="tb">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            Keterangan Pendidikan
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row mb-3">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Lulusan dari</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>

                                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Nomor Ijazah</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    </div>

                                </div>
                                <div class="form-row mb-3">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Pindahan dari</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>

                                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Alasan Pindah</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    </div>

                                </div>
                                <div class="form-row mb-3">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Diterima di Kelas</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>

                                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Terima</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            Data Ayah
                        </div>
                        <div class="card-body">
                            <form action="admin/tambahaksi" method="post">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Ayah</label>
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
                                    <label for="status_dlm_kel" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="status_dlm_kel" name="status_dlm_kel">
                                    </div>

                                    <label for="anak_ke" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="anak_ke" name="anak_ke">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="kelainan_jasmani" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="kelainan_jasmani" name="kelainan_jasmani">
                                    </div>
                                    <label for="berat_bdn" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="berat_bdn" name="berat_bdn">
                                    </div>
                                    <label for="tinggi_bdn" class="col-sm-2 col-form-label">Penghasilan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="no_telp" name="no_telp">
                                    </div>

                                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            Data Ibu
                        </div>
                        <div class="card-body">
                            <form action="admin/tambahaksi" method="post">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Ibu</label>
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
                                    <label for="status_dlm_kel" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="status_dlm_kel" name="status_dlm_kel">
                                    </div>

                                    <label for="anak_ke" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="anak_ke" name="anak_ke">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="kelainan_jasmani" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="kelainan_jasmani" name="kelainan_jasmani">
                                    </div>
                                    <label for="berat_bdn" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="berat_bdn" name="berat_bdn">
                                    </div>
                                    <label for="tinggi_bdn" class="col-sm-2 col-form-label">Penghasilan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="no_telp" name="no_telp">
                                    </div>

                                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            Data Wali
                        </div>
                        <div class="card-body">
                            <form action="admin/tambahaksi" method="post">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Wali</label>
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
                                    <label for="kelainan_jasmani" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="kelainan_jasmani" name="kelainan_jasmani">
                                    </div>
                                    <label for="berat_bdn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="berat_bdn" name="berat_bdn">
                                    </div>
                                    <label for="tinggi_bdn" class="col-sm-2 col-form-label">No Telp</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <label for="kelainan_jasmani" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="kelainan_jasmani" name="kelainan_jasmani">
                                    </div>
                                    <label for="berat_bdn" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="berat_bdn" name="berat_bdn">
                                    </div>
                                    <label for="tinggi_bdn" class="col-sm-2 col-form-label">Penghasilan</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="tinggi_bdn" name="tinggi_bdn">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            Data Setelah Selesai Pendidikan
                        </div>
                        <div class="card-body">
                            <form action="admin/tambahaksi" method="post">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Melanjutkan di</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Bekerja di</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div> -->
                </form>
            </form>


        </div>
    </div>
</div>

<?= $this->endSection(); ?>