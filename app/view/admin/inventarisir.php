<section id="inputFormBarang">
    <div class="input-container">
        <h1 class="mt-2 mb-2 ms-3">Inventarisir Barang</h1>
        <hr>
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
                    <input name="maintainer_barang" type="text" class="form-control" id="maintainerBarang" placeholder="ex: Agus Susilo">
                </div>
                <div class="col-5">
                    <label for="asalBarang">Asal Barang</label>
                    <select class="form-select" name="asal_barang" id="asalBarang">
                        <option selected>Choose...</option>
                        <option value="Hibah">Hibah</option>
                        <option value="Pembelian">Pembelian</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <label for="keteranganBarang">Keterangan Barang</label>
                    <textarea name="keterangan_barang" class="form-control" name="" id="keteranganBarang" cols="30" rows="6"></textarea>
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