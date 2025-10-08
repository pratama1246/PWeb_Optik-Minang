<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Data Penjualan</h1>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Pencarian Data Optik" aria-describedby="button-addon2" name="cari">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                </div>
                </form>
                <?php if(session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No. Orders</th>
                                <th scope="col">No. Ref</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Tanggal Pesan</th>
                                <th scope="col">Karyawan</th>
                                <th scope="col">Total Modal</th>
                                <th scope="col">Total Jual</th>
                                <th scope="col">Total Bayar</th>
                                <th scope="col">Keuntungan</th>
                                <th scope="col">Action</th>
                            </tr>
                        <thead>
                    <tbody>
                    <?php
                    $i=1;
                    foreach($optik as $b): ?>
                    <tr>
                        <td><?= $b['no_order']; ?></td>
                        <td><?= $b['no_ref']; ?></td>
                        <td><?= $b['nama']; ?></td>
                        <td><?= $b['telepon']; ?></td>
                        <td><?= $b['tgl_pesan']; ?></td>
                        <td><?= $b['karyawan']; ?></td>
                        <td><?= $b['total_modal']; ?></td>
                        <td><?= $b['total_jual']; ?></td>
                        <td><?= $b['total_bayar']; ?></td>
                        <td><?= $b['keuntungan']; ?></td>
                        <td>
                            <a href="/optik/ubah/<?= $b['no_order']; ?>" class="btn btn-warning">Ubah</a>
                            <a href="/optik/delete/<?= $b['no_order']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>