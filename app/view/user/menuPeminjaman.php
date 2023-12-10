<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userMenuAjukan.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="home-section" style="background-color:transparent; margin-top:6rem; box-shadow:none;">
    <!-- <div class="wrapper-text">
        <div class="text">Menu</div>
    </div> -->
    <div class="container">
        <div class="ml-3 mt-4">
            <h3>Ajukan Peminjaman Alat</h3>
            <p>Cari item yang ingin Anda pinjam, jika ada pilih yang anda perlukan lalu klik button selanjutnya</p>
            <form class="example mr-3 mb-4" action="action_page.php">
                <input type="text" placeholder="Search.." name="cariBarang">
                <button type="submit" name="buttonCariBarang"><i class="fa fa-search"></i></button>
                <div class="table-responsive">
                    <table id="tabelPilihBarang" class="table table-striped mt-3" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar Barang</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Keterangan Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data['barang'] as $barang) {
                            ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td><img src="<?= BASEURL ?>/img/barang/<?= $barang['gambar_barang'] ?>" alt="Gambar Barang" width="100px"></td>
                                    <td>
                                        <?= $barang['nama_barang']; ?>
                                    </td>
                                    <td>
                                        <?= $barang['kode_barang']; ?>
                                    </td>
                                    <td>
                                        <?= $barang['jumlah_barang'] ?>
                                    </td>
                                    <td>
                                        <?= $barang['keterangan_barang'] ?>
                                    </td>
                                    <td>
                                        <!-- <a class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang<?= $barang['id_barang'] ?>">Ubah</a>
                                        <a href="<?= BASEURL2 ?>/admin/hapusBarang/<?= $barang['id_barang'] ?>" class="btn btn-danger">Hapus</a> -->
                                        <input type="checkbox" id=".." name=".." value="..">
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </form>
            <form class="example mb-4" action="action_page.php">
                <button type="button" class="btn btn-dark button-container button-next" name="status" value="next">
                    <a class="text-button" href="formPeminjaman">Selanjutnya</a>
                </button>
            </form>
        </div>
    </div>
</section>