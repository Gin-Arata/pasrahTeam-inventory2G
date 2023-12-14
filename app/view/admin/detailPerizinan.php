<div id="perizinanBarang">
    <div class="navbar-home">
        <h1>Inventaris JTI</h1>
    </div>

    <div class="card" style="width: 99%;">
        <h5 class="card-header" style="background-color: #E4E9F7; color: #294172;">Detail Perizinan Barang -
            <?= $data['detailPerizinan'][0]['nama_user'] ?>
        </h5>
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-12">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="mt-0 form-control shadow-sm">Nama Peminjam :
                        <?= $data['detailPerizinan'][0]['nama_user'] ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="form-control shadow-sm">Tanggal Pinjam :
                        <?= $data['detailPerizinan'][0]['waktu_pinjam'] ?>
                    </p>
                </div>
                <div class="col-3">
                    <p class="form-control shadow-sm">
                        Tanggal Pengembalian :
                        <?= $data['detailPerizinan'][0]['waktu_pengembalian'] ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="form-control shadow-sm">
                        Keterangan Pinjam : <br>
                        <?= $data['detailPerizinan'][0]['keterangan_pinjam'] ?>
                    </p>
                </div>
            </div>
            <div class="table-responsive">
                <table id="tabelPerizinan" class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar Barang</td>
                            <td>Nama Barang</td>
                            <td>Jumlah Dipinjam</td>
                            <td>Konfirmasi</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['detailPerizinan'] as $perizinan) {
                            ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <img src="<?= BASEURL ?>/img/barang/<?= $perizinan['gambar_barang'] ?>"
                                        alt="Gambar Barang" width="100px">
                                </td>
                                <td>
                                    <?= $perizinan['nama_barang'] ?>
                                </td>
                                <td>
                                    <?= $perizinan['jumlah_dipinjam'] ?>
                                </td>
                                <td>
                                    <form action="<?= BASEURL2 ?>/admin/updateStatusPinjamPerizinan" method="POST">
                                        <input type="hidden" name="tanggalPinjam" value="<?= $perizinan['waktu_pinjam'] ?>">
                                        <input type="hidden" name="tanggalKembali"
                                            value="<?= $perizinan['waktu_pengembalian'] ?>">
                                        <input type="hidden" name="id_user" value="<?= $perizinan['id_user'] ?>">
                                        <input type="hidden" name="id_pinjam" value="<?= $perizinan['id_peminjaman'] ?>">
                                        <input type="hidden" name="status" value="Disetujui">
                                        <button type="submit" class="btn btn-primary mb-1">Terima</button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#tolakPerizinan<?= $perizinan['id_peminjaman'] ?>">
                                        Tolak
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Tolak Perizinan -->
<?php foreach ($data['detailPerizinan'] as $pesanTolak) { ?>
    <div class="modal fade" id="tolakPerizinan<?= $pesanTolak['id_peminjaman'] ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Berikan Pesan Tolak Peminjaman</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL2 ?>/admin/tolakPerizinan" method="POST">
                        <input type="hidden" name="id_pinjam" value="<?= $pesanTolak['id_peminjaman'] ?>">
                        <input type="hidden" name="status" value="Ditolak">
                        <input type="hidden" name="jumlah_dipinjam" value="<?= $pesanTolak['jumlah_dipinjam'] ?>">
                        <input type="hidden" name="id_barang" value="<?= $pesanTolak['id_barang'] ?>">
                        <input type="hidden" name="id_user" value="<?= $pesanTolak['id_user'] ?>">
                        <input type="hidden" name="tanggalPinjam" value="<?= $pesanTolak['waktu_pinjam'] ?>">
                        <input type="hidden" name="tanggalKembali" value="<?= $pesanTolak['waktu_pengembalian'] ?>">
                        <label for="pesanTolak">Pesan Penolakan</label>
                        <textarea name="pesan_tolak" id="pesanTolak" class="form-control" cols="30" rows="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Tolak</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>