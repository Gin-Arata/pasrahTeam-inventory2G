<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userMenuAjukan.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="home-section" >
    <div class="wrapper-text">
        <div class="text">Menu</div>
    </div>
    <div class="container">
        <div class="ml-2 mt-3">
            <h3>Ajukan Peminjaman Alat</h3>

            <p>Cari item yang ingin Anda pinjam, jika ada pilih yang anda perlukan lalu klik button selanjutnya</p>
            <form class="example mr-3 mb-4" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <form class="example mb-4" action="action_page.php">
                <button type="button" class="btn btn-dark button-container button-next" name="status" value="next">
                    <a class="text-button" href="formPeminjaman">Selanjutnya</a>
                </button>
            </form>
        </div>
    </div>
</section>