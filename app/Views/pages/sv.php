<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Status Rencana Kegiatan LAB</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Tanggal Realisasi</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($statusvalidation as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['NamaKegiatan']; ?></td>
                            <td><?= $s['Semester']; ?></td>
                            <td><?= $s['TglRealisasi']; ?></td>
                            <td><?= $s['TglSelesai']; ?></td>
                            <td>
                                <a href="" class="btn btn-info"><?= $s['Status']; ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>