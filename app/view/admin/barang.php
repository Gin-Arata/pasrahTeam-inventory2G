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
                        <td>
                            <?= $no; ?>
                        </td>
                        <td>Ini gambar</td>
                        <td>
                            <?= $barang['nama_barang']; ?>
                        </td>
                        <td>
                            <?= $barang['kode_barang']; ?>
                        </td>
                        <td>
                            <?= $barang['maintainer_barang']; ?>
                        </td>
                        <td>
                            <?= $barang['jumlah_barang'] ?>
                        </td>
                        <td>
                            <?= $barang['asal_barang'] ?>
                        </td>
                        <td>
                            <?= $barang['keterangan_barang'] ?>
                        </td>
                        <td>
                            <a class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modalEditBarang<?= $barang['id_barang'] ?>">Ubah</a>
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


<!-- Modal Edit Barang -->
<?php foreach($data['barang'] as $modalEdit) { ?>
    <div class="modal fade" id="modalEditBarang<?= $modalEdit['id_barang']; ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php var_dump($modalEdit); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>