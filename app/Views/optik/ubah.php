<?= $this->extend('layout/header') ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <h3 class="mt-2">Form Ubah Data Penjualan</h3>
        <form action="/optik/update/<?= $optik['no_order']; ?>" method="post" class="mt-4">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="no_order" value="<?= $optik['no_order']; ?>">

            <div class="row mb-3">
                <label for="no_ref" class="col-sm-2 col-form-label">No. Ref</label>
                <div class="col-sm-6">
                    <input type="text" 
                           id="no_ref"
                           class="form-control <?= ($validation->hasError('no_ref')) ? 'is-invalid' : ''; ?>" 
                           name="no_ref" 
                           autofocus
                           value="<?= (old('no_ref')) ? old('no_ref') : $optik['no_ref']; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('no_ref'); ?>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Pemesan</label>
                <div class="col-sm-6">
                    <input type="text" 
                           id="nama"
                           class="form-control" 
                           name="nama" 
                           value="<?= (old('nama')) ? old('nama') : $optik['nama']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-6">
                    <input type="text" 
                           id="telepon"
                           class="form-control" 
                           name="telepon" 
                           value="<?= (old('telepon')) ? old('telepon') : $optik['telepon']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="tgl_pesan" class="col-sm-2 col-form-label">Tanggal Pesan</label>
                <div class="col-sm-6">
                    <input type="date" 
                           id="tgl_pesan"
                           class="form-control" 
                           name="tgl_pesan" 
                           value="<?= (old('tgl_pesan')) ? old('tgl_pesan') : date('Y-m-d', strtotime($optik['tgl_pesan'])); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="karyawan" class="col-sm-2 col-form-label">Karyawan</label>
                <div class="col-sm-6">
                    <input type="text" 
                           id="karyawan"
                           class="form-control" 
                           name="karyawan" 
                           value="<?= (old('karyawan')) ? old('karyawan') : $optik['karyawan']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="total_modal" class="col-sm-2 col-form-label">Total Modal</label>
                <div class="col-sm-6">
                    <input type="number" 
                           id="total_modal"
                           class="form-control" 
                           name="total_modal" 
                           value="<?= (old('total_modal')) ? old('total_modal') : $optik['total_modal']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="total_jual" class="col-sm-2 col-form-label">Total Jual</label>
                <div class="col-sm-6">
                    <input type="number" 
                           id="total_jual"
                           class="form-control" 
                           name="total_jual" 
                           value="<?= (old('total_jual')) ? old('total_jual') : $optik['total_jual']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="total_bayar" class="col-sm-2 col-form-label">Total Bayar</label>
                <div class="col-sm-6">
                    <input type="number" 
                           id="total_bayar"
                           class="form-control" 
                           name="total_bayar" 
                           value="<?= (old('total_bayar')) ? old('total_bayar') : $optik['total_bayar']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="keuntungan" class="col-sm-2 col-form-label">Keuntungan</label>
                <div class="col-sm-6">
                    <input type="number" 
                           id="keuntungan"
                           class="form-control" 
                           name="keuntungan" 
                           value="<?= (old('keuntungan')) ? old('keuntungan') : $optik['keuntungan']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>