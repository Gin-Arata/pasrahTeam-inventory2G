<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userMenuAjukan.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="home-section" style="background-color:transparent; margin-top:7%; box-shadow:none;">
    <!-- <div class="wrapper-text">
        <div class="text">Menu</div>
    </div> -->
    <div class="container">
        <div class="ml-3 mt-4">
            <h3>Ajukan Peminjaman Alat</h3>
            <p>Cari item yang ingin Anda pinjam, jika ada pilih yang anda perlukan lalu klik button selanjutnya</p>
            <form class="example mr-3 mb-4" action="<?= BASEURL2 ?>/user/formPeminjaman" method="POST">
                <?php
                Flasher::flash();
                ?>
                <div class="table-responsive">
                    <table id="tabelPilihBarang" class="table table-striped mt-3" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar Barang</th>
                                <th>Nama Barang</th>
                                <th>Maintainer Barang</th>
                                <th>Stok Barang</th>
                                <th>Keterangan Barang</th>
                                <th>Jumlah Yang Dipinjam</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['tabelBarang'] as $rowBarang) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <img width="100px"
                                            src="<?= BASEURL ?>/img/barang/<?= $rowBarang['gambar_barang'] ?>"
                                            alt="Gambar Barang">
                                    </td>
                                    <td>
                                        <?= $rowBarang['nama_barang'] ?>
                                    </td>
                                    <td>
                                        <?= $rowBarang['maintainer_barang'] ?>
                                    </td>
                                    <td>
                                        <?= $rowBarang['jumlah_barang'] ?>
                                    </td>
                                    <td>
                                        <?= $rowBarang['keterangan_barang'] ?>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="jumlah_dipinjam[]">
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" name="idBarang[]"
                                            value="<?= $rowBarang['id_barang'] ?>">
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="mt-2 btn btn-dark button-container button-next">
                    Selanjutnya
                </button>
            </form>
        </div>
    </div>
</section>