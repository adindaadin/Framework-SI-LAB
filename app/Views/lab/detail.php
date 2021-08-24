<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-header">
                    Laporan Rencana Kegiatan LAB
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Kegiatan : <?= $lab['namakegiatan']; ?></h5>
                    <p class="card-text">Pelaksana : <?= $lab['pelaksana']; ?></p>
                    <p class="card-text">Tanggal : <?= $lab['tanggal']; ?></p>
                    <p class="card-text">Alokasi Waktu : <?= $lab['alokasiwaktu']; ?></p>
                    <p class="card-text">Ruang : <?= $lab['lokasi']; ?></p>
                    <p class="card-text">Anggaran : <?= $lab['anggaran']; ?></p>
                    <p class="card-text">Semester : <?= $lab['semester']; ?></p>

                    <a href="/lab/edit/<?= $lab['slug']; ?>" class="btn btn-warning">UBAH</a>

                    <form action="/lab/<?= $lab['idlab']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?'); ">HAPUS</button>
                    </form>

                    <br><br>
                    <a href="/lab">Kembali ke Rencana Kegiatan</a>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>