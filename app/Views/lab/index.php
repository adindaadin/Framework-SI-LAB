<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <a href="/lab/create" class="btn btn-primary" mt-3>TAMBAH RENCANA</a>

            <h1>Rencana Kegiatan LAB</h1>

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Pelaksana</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Alokasi Waktu</th>
                        <th scope="col">Ruang</th>
                        <th scope="col">Anggaran</th>
                        <th scope="col">Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($lab as $l) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $l['namakegiatan']; ?></td>
                            <td><?= $l['pelaksana']; ?></td>
                            <td><?= $l['tanggal']; ?></td>
                            <td><?= $l['alokasiwaktu']; ?></td>
                            <td><?= $l['lokasi']; ?></td>
                            <td>Rp. <?= $l['anggaran']; ?></td>
                            <td><?= $l['semester']; ?></td>
                            <td>
                                <a href="/lab/<?= $l['slug']; ?>" class="btn btn-success">LAPORAN</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>