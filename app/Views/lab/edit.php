<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Rencana Kegiatan LAB</h2>

            <form action="/lab/update/<?= $lab['idlab']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $lab['slug']; ?>">

                <div class="mb-3">
                    <label for="namakegiatan" class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control <?= ($validation->hasError('namakegiatan')) ? 'is-invalid' : ''; ?>" id="namakegiatan" name="namakegiatan" autofocus value="<?= (old('namakegiatan')) ? old('namakegiatan') : $lab['namakegiatan'] ?> ">
                    <div class=" invalid-feedback">
                        <?= $validation->getError('namakegiatan'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pelaksana" class="form-label">Pelaksana</label>
                    <input type="text" id="pelaksana" class="form-control" name="pelaksana" value="<?= (old('pelaksana')) ? old('pelaksana') : $lab['pelaksana'] ?> ">
                </div>
                <div class="mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" id="tanggal" class="form-control" name="tanggal" value="<?= (old('tanggal')) ? old('tanggal') : $lab['tanggal'] ?> ">
                </div>
                <div class="mb-3">
                    <label for="alokasiwaktu" class="form-label">Alokasi Waktu</label>
                    <input type="text" id="alokasiwaktu" class="form-control" name="alokasiwaktu" value="<?= (old('alokasiwaktu')) ? old('alokasiwaktu') : $lab['alokasiwaktu'] ?> ">
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Ruang</label>
                    <input type="text" id="lokasi" class="form-control" name="lokasi" value="<?= (old('lokasi')) ? old('lokasi') : $lab['lokasi'] ?> ">
                </div>
                <div class="mb-3">
                    <label for="anggaran" class="form-label">Anggaran</label>
                    <input type="text" id="anggaran" class="form-control" placeholder="Rp" name="anggaran" value="<?= (old('anggaran')) ? old('anggaran') : $lab['anggaran'] ?> ">
                </div>
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="text" id="semester" class="form-control" name="semester" value="<?= (old('semester')) ? old('semester') : $lab['semester'] ?> ">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">UBAH DATA</button>
                </div>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>