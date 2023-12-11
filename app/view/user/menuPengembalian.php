<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userFormulir.css">
<section class="home-section" style="background-color:transparent; margin-top:6rem; box-shadow:none;">
    <!-- <div class="wrapper-text">
        <div class="text">Menu</div>
    </div> -->
    <div class="container">
        <div class="form-control">
            <div class="ml-3 mt-4 bg-JTI">
                <h3>Menu Pengembalian Barang </h3>
                <p>Centang barang yang ingin dikembalikan, kemudian klik "Submit"</p>
                <?php Flasher::flash(); ?>
                <form class="example mr-3 mb-4" action="<?= BASEURL2 ?>/user/prosesPengembalian" method="POST">
                    <div class="table-responsive">
                        <table id="tabelPilihBarang" class="table table-striped mt-3" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Jumlah Barang Dipinjam</th>
                                    <th>Keterangan Barang</th>
                                    <th>Return Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data['tablePeminjaman'] as $rowPeminjaman) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td><img width="100px"
                                                src="<?= BASEURL ?>/img/barang/<?= $rowPeminjaman['gambar_barang'] ?>"
                                                alt="Gambar Barang"></td>
                                        <td>
                                            <?= $rowPeminjaman['nama_barang'] ?>
                                        </td>
                                        <td>
                                            <?= $rowPeminjaman['kode_barang'] ?>
                                        </td>
                                        <td>
                                            <?= $rowPeminjaman['jumlah_dipinjam'] ?>
                                        </td>
                                        <td>
                                            <?= $rowPeminjaman['keterangan_barang'] ?>
                                        </td>
                                        <td class="d-flex justify-content-center">
                                            <input class="form-check-input" type="checkbox" name="idPeminjaman[]"
                                                value="<?= $rowPeminjaman['id_peminjaman'] ?>">
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-dark">Kembalikan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>