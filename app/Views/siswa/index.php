<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col">
            <a href="admin/tambah" class="btn btn-primary mb-3">Tambah Data Peserta Didik</a>
            <table class="table table-striped mt-1">
                <thead>
                    <tr>
                        <th scope="col">N0</th>
                        <th scope="col">NIS</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">ACTION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($data_pd as $siswa) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $siswa->nis; ?></td>
                            <td><?= $siswa->nama; ?></td>
                            <td><?= $siswa->j_k; ?></td>
                            <td></td>
                            <td>
                                <a href="<?= base_url('siswa/detailsiswa'); ?>" class="btn btn-info">Detail</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>