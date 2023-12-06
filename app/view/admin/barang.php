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
                <?php
                $no = 1;
                foreach($data['barang'] as $barang) {
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td>Ini gambar</td>
                        <td><?= $barang['nama_barang']; ?></td>
                        <td><?= $barang['kode_barang']; ?></td>
                        <td><?= $barang['maintainer_barang']; ?></td>
                        <td><?= $barang['jumlah_barang'] ?></td>
                        <td><?= $barang['asal_barang'] ?></td>
                        <td><?= $barang['keterangan_barang'] ?></td>
                        <td>
                            <a href="" class="btn btn-primary mb-1">Ubah</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php 
                $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>