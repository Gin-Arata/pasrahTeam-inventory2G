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
            <form class="example mr-3 mb-4" action="action_page.php">
                <input type="text" placeholder="Search.." name="cariBarang">
                <button type="submit" name="buttonCariBarang"><i class="fa fa-search"></i></button>
                <table id="tabelPilihBarang" class="table table-striped mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo 'ApA'; ?></td>
                            <td><?php echo 'APA'; ?></td>
                            <td><?php echo 'ApA'; ?></td>
                            <td><?php echo 'ApA'; ?></td>
                            <td><?php echo 'ApA'; ?></td>
                            <td><input type="checkbox" id=".." name=".." value=".."></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form class="example mb-4" action="action_page.php">
                <button type="button" class="btn btn-dark button-container button-next" name="status" value="next">
                    <a class="text-button" href="formPeminjaman">Selanjutnya</a>
                </button>
            </form>
        </div>
    </div>
</section>