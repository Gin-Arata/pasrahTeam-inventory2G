<section id="inputFormBarang">
    <div class="input-container">
        <div class="navbar-home">
            <h1>Inventaris JTI</h1>
        </div>
        <div class="card mb-2" style="width: 99%;">
            <h5 class="card-header" style="background-color: #E4E9F7; color: #294172;">Tambah Data Barang</h5>
            <div class="card-body">
                <form action="<?= BASEURL2 ?>/admin/tambahBarang" method="POST" enctype="multipart/form-data"
                    class="ms-3">
                    <div class="row mb-0">
                        <div class="col-12">
                            <?php Flasher::flash(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="namaBarang">Nama Barang</label>
                            <input name="nama_barang" type="text" class="form-control" id="namaBarang"
                                placeholder="ex: Mouse" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="kodeBarang">Kode Barang</label>
                            <input name="kode_barang" type="text" class="form-control" id="kodeBarang"
                                placeholder="ex: 75TY23" required>
                        </div>
                        <div class="col-6">
                            <label for="jumlahBarang">Jumlah Barang</label>
                            <input name="jumlah_barang" type="text" class="form-control" id="jumlahBarang"
                                placeholder="ex: 5" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="maintainerBarang">Maintainer Barang</label>
                            <input name="maintainer_barang" type="text" class="form-control" id="maintainerBarang"
                                placeholder="ex: Agus Susilo" required>
                        </div>
                        <div class="col-4">
                            <label for="asalBarang">Asal Barang</label>
                            <select class="form-select" name="asal_barang" id="asalBarang">
                                <option selected>Choose...</option>
                                <?php foreach ($data['asal'] as $rowAsal) { ?>
                                    <option value="<?= $rowAsal['id_asal'] ?>">
                                        <?= $rowAsal['asal_barang'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-2 mt-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addAsalBarang">Tambah Asal Barang</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="keteranganBarang">Keterangan Barang</label>
                            <textarea name="keterangan_barang" class="form-control" name="" id="keteranganBarang"
                                cols="30" rows="6" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label for="inputGambar">Gambar Barang</label>
                            <input name="gambar_barang" class="form-control" type="file" id="inputGambar" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary mt-3">Tambahkan Barang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<!-- Modal Tambah Asal Barang -->
<div class="modal fade" id="addAsalBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Asal Barang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL2 ?>/admin/tambahAsalBarang" method="POST">
                    <label for="asalBarang">Asal Barang Baru</label>
                    <input type="text" id="asalBarang" class="mt-2 form-control" name="asalBarangBaru">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>