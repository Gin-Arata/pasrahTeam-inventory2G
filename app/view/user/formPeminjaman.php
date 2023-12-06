<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userFormulir.css">
<section class="home-section" style="background-color:transparent; margin-top:6rem; box-shadow:none;">
    <!-- <div class="wrapper-text">
        <div class="text">Menu</div>
    </div> -->
    <div class="container">
        <div class="form-control">
            <div class="ml-3 mt-4 bg-JTI">
                <h3>Peminjaman >> Form Peminjaman Barang </h3>
                <p>Isilah data peminjaman pada form berikut dan tinjau apakah barang yang akan dipinjam sudah
                    benar. Lalu klik “Pinjam”</p>
                <form action="" method="POST">
                    <div class="row">
                        <div class="input-group mb-3 d-flex align-items-center justify-content-left">
                            <div class="col-sm-3">
                                <label class="mb-0 me-2">Nama Peminjam</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-set" id="NIP/NIM" placeholder="ex : 1234567890" required>
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="input-group mb-3 d-flex align-items-center justify-content-left">
                            <!-- <div class="row"> -->
                            <div class="col-sm-3">
                                <label class="mb-0 me-2">NIP/NIM</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-set" id="NIP/NIM" placeholder="ex : 1234567890" required>
                            </div>
                        </div>
                        <div class="input-group mb-3 d-flex align-items-center justify-content-left">
                            <!-- <div class="row"> -->
                            <div class="col-sm-3">
                                <label class=" mb-0 me-2">Mulai pinjam</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control input-set me-2" placeholder="Username" aria-label="Username">
                            </div>
                            <div class="col-sm-0">
                                <label class="mb-0 me-2 ms-6">Sampai</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control input-set" placeholder="Server" aria-label="Server">
                            </div>
                        </div>
                        <div class="input-group mb-3 d-flex align-items-center justify-content-left">
                            <!-- <div class="row"> -->
                            <div class="col-sm-3">
                                <label class="mb-0 me-2">Item yang dipinjam</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-set" id="NIP/NIM" placeholder="ex : 1234567890" required>
                            </div>
                        </div>
                        <div class="input-group mb-3 d-flex align-items-center justify-content-left">
                            <!-- <div class="row"> -->
                            <div class="col-sm-3">
                                <label class="mb-0 me-2">Alasan meminjam</label>
                            </div>
                            <div class="col-md-4">
                                <textarea type="text" class="form-control input-set" id="NIP/NIM" style="outline: none;
                            border-color: #838C96; background-color: #838C96; color: white;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-dark mr-4">
                            <a class="text-button" href="menuPeminjaman">Back</a>
                        </button>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>