<div class="main-content">
    <!-- Shortcut Card -->
    <div class="card-shortcut">
        <div class="shortcut-barang">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Kelola Barang</h5>
                    <p class="card-text">
                        Total Barang :
                        <?= $data['totalBarang']['total_barang'] ?> Barang
                    </p>
                    <a href="<?= BASEURL2 ?>/admin/barang" class="card-link">Kelola</a>
                </div>
            </div>
        </div>

        <div class="shortcut-user">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Kelola User</h5>
                    <p class="card-text">
                        Total User :
                        <?= $data['totalUser']['total_user'] ?> User
                    </p>
                    <a href="<?= BASEURL2 ?>/admin/user" class="card-link">Kelola</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Shortcut Perizinan -->
    <div class="shortcut-perizinan">
        <div class="shortcut-perizinan-content table-responsive">
            <h3 class="mb-4">Kelola Perizinan</h3>
            <table id="shortcutPerizinan" class="table table-striped table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Peminjam</th>
                        <th>Nama Barang</th>
                        <th>Waktu Pinjam</th>
                        <th>Waktu Pengembalian</th>
                        <th>Jumlah Dipinjam</th>
                        <th>Keterangan Pinjam</th>
                        <th>Konfirmasi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data['peminjaman'] as $peminjaman) {
                        if ($peminjaman['status_pinjam'] == 'Proses') {
                            ?>
                            <tr>
                                <td>
                                    <?= $no ?>
                                </td>
                                <td>
                                    <?= $peminjaman['nama_user'] ?>
                                </td>
                                <td>
                                    <?= $peminjaman['nama_barang'] ?>
                                </td>
                                <td>
                                    <?= $peminjaman['waktu_pinjam'] ?>
                                </td>
                                <td>
                                    <?= $peminjaman['waktu_pengembalian'] ?>
                                </td>
                                <td>
                                    <?= $peminjaman['jumlah_dipinjam'] ?>
                                </td>
                                <td>
                                    <?= $peminjaman['keterangan_pinjam'] ?>
                                </td>
                                <td>
                                    <form action="<?= BASEURL2 ?>/admin/updateStatusPinjam" method="POST">
                                        <input type="hidden" name="id_pinjam" value="<?= $peminjaman['id_peminjaman'] ?>">

                                        <button type="submit" class="btn btn-primary" name="status"
                                            value="Disetujui">Terima</button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tolakPeminjaman<?= $peminjaman['id_peminjaman'] ?>">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        <?php }
                    $no++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tolak Peminjaman -->
<?php foreach($data['peminjaman'] as $pesanTolak) { ?>
<div class="modal fade" id="tolakPeminjaman<?= $pesanTolak['id_peminjaman'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Berikan Pesan Tolak Peminjaman</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL2 ?>/admin/tolakPinjam" method="POST">
                    <input type="hidden" name="id_pinjam" value="<?= $pesanTolak['id_peminjaman'] ?>">
                    <input type="hidden" name="status" value="Ditolak">
                    <input type="hidden" name="jumlah_dipinjam" value="<?= $pesanTolak['jumlah_dipinjam'] ?>">
                    <input type="hidden" name="id_barang" value="<?= $pesanTolak['id_barang'] ?>">
                    <label for="pesanTolak">Pesan Penolakan</label>
                    <textarea name="pesan_tolak" id="pesanTolak" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Tolak</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>