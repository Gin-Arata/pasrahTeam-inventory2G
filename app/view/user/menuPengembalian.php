<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userFormulir.css">
<section class="home-section" style="background-color:transparent; margin-top:6rem; box-shadow:none;">
    <!-- <div class="wrapper-text">
        <div class="text">Menu</div>
    </div> -->
    <div class="container">
        <div class="form-control">
            <div class="ml-3 mt-4 bg-JTI">
                <h3>Peminjaman >> Form Pengembqliqn Barang </h3>
                <p>Isilah data peminjaman pada form berikut dan tinjau apakah barang yang akan dipinjam sudah
                    benar. Lalu klik “Pinjam”</p>
                <form class="example mr-3 mb-4" action="action_page.php">
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
                                    <th>Return Barang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo '1'; ?></td>
                                    <td><?php echo 'APA'; ?></td>
                                    <td><?php echo 'ApA'; ?></td>
                                    <td><?php echo 'ApA'; ?></td>
                                    <?php $value = 4; ?>
                                    <td><input type="number" value="<?php echo $value; ?>"></td>
                                    <td><?php echo 'ApA'; ?></td>
                                    <td><input type="checkbox" id=".." name=".." value=".."></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                    <!-- <div class="input-group mb-3 d-flex align-items-center justify-content-center">
                             <input type="submit" class="btn btn-primary flex-grow-1 ms-3" value="Login" title="Login Now">
                            <input type="submit" class="btn btn-primary flex-grow-1 me-3" value="Login" title="Login Now">
                        </div> -->
                </form>
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>