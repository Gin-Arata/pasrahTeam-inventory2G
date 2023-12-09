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

                                        <button type="submit" class="btn btn-danger" name="status"
                                            value="Ditolak">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>