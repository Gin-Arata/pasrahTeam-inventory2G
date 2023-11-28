<div class="main-content">
    <!-- Shortcut Card -->
    <div class="card-shortcut">
        <div class="shortcut-barang">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Kelola Barang</h5>
                    <p class="card-text">
                        Jumlah barang : ... Yang terdaftar
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
                        Jumlah user : ... Yang terdaftar
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
                        <th>Nama Barang</th>
                        <th>Waktu Pinjam</th>
                        <th>Waktu Pengembalian</th>
                        <th>Jumlah Barang</th>
                        <th>Keterangan Pinjam</th>
                        <th>Konfirmasi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kursi</td>
                        <td>24-10-2023</td>
                        <td>26-10-2023</td>
                        <td>3</td>
                        <td>Untuk kepentingan rapat</td>
                        <td>
                            <form action="">
                                <button type="submit" class="btn btn-primary" name="status"
                                    value="disetujui">Terima</button>
                                <button type="submit" class="btn btn-danger" name="status"
                                    value="ditolak">Tolak</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>