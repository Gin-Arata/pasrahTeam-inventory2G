<div id="daftarBarang">
    <h1 class="mb-3 mt-2">Daftar Barang</h1>

    <div class="tabelBarang table-responsive">
        <a href="<?= BASEURL2; ?>/admin/inventarisir" class="btn btn-primary mb-3">Tambah Barang</a>
        <table id="daftarBarangTabel" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar Barang</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Maintainer Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Asal Barang</th>
                    <th>Keterangan Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ini gambar</td>
                    <td>Kursi</td>
                    <td>K234</td>
                    <td>Agus Susilo</td>
                    <td>5</td>
                    <td>Hibah</td>
                    <td>Semua dalam kondisi baik.</td>
                    <td>
                        <a href="" class="btn btn-primary mb-1">Ubah</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>