<section id="inputFormBarang">
    <div class="input-container">
        <div class="navbar-home">
            <h1>Tambah Barang</h1>
        </div>
        <form action="<?= BASEURL2 ?>/admin/tambahBarang" method="POST" enctype="multipart/form-data" class="ms-3">
            <div class="row">
                <div class="col-10">
                    <label for="namaBarang">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="namaBarang" placeholder="ex: Mouse">
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label for="kodeBarang">Kode Barang</label>
                    <input name="kode_barang" type="text" class="form-control" id="kodeBarang" placeholder="ex: 75TY23">
                </div>
                <div class="col-5">
                    <label for="jumlahBarang">Jumlah Barang</label>
                    <input name="jumlah_barang" type="text" class="form-control" id="jumlahBarang" placeholder="ex: 5">
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <label for="maintainerBarang">Maintainer Barang</label>
                    <input name="maintainer_barang" type="text" class="form-control" id="maintainerBarang"
                        placeholder="ex: Agus Susilo">
                </div>
                <div class="col-3">
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
                <div class="col-10">
                    <label for="keteranganBarang">Keterangan Barang</label>
                    <textarea name="keterangan_barang" class="form-control" name="" id="keteranganBarang" cols="30"
                        rows="6"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="inputGambar">Gambar Barang</label>
                    <input name="gambar_barang" class="form-control" type="file" id="inputGambar">
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-primary mt-3">Tambahkan Barang</button>
                </div>
            </div>
        </form>
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