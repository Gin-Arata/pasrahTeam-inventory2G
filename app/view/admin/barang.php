<div id="daftarBarang">
    <div class="navbar-home">
        <h1>Daftar Barang</h1>
    </div>

    <div class="tabelBarang table-responsive">
        <div class="row mb-0">
            <div class="col-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <!-- <a href="<?= BASEURL2; ?>/admin/inventarisir" class="btn btn-primary mb-3">Tambah Barang</a> -->
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
                foreach ($data['barang'] as $barang) {
                    ?>
                    <tr>
                        <td>
                            <?= $no; ?>
                        </td>
                        <td><img src="<?= BASEURL ?>/img/barang/<?= $barang['gambar_barang'] ?>" alt="Gambar Barang"
                                width="100px"></td>
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
                            <a class="btn btn-primary mb-1" data-bs-toggle="modal"
                                data-bs-target="#modalEditBarang<?= $barang['id_barang'] ?>">Ubah</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapusBarang<?= $barang['id_barang'] ?>">Hapus</button>
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
<?php foreach ($data['barang'] as $modalEdit) { ?>
    <div class="modal fade" id="modalEditBarang<?= $modalEdit['id_barang']; ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASEURL2 ?>/admin/editBarang" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" name="edit_nama" class="form-control" id="namaBarang"
                            value="<?= $modalEdit['nama_barang'] ?>">

                        <label for="kodeBarang">Kode Barang</label>
                        <input type="text" class="form-control" id="kodeBarang" value="<?= $modalEdit['kode_barang'] ?>"
                            disabled>

                        <label for="maintainBarang">Maintainer Barang</label>
                        <input type="text" name="edit_maintain" class="form-control" id="maintainBarang"
                            value="<?= $modalEdit['maintainer_barang'] ?>">

                        <label for="jmlBarang">Jumlah Barang</label>
                        <input type="text" name="edit_jumlah" class="form-control" id="jmlBarang"
                            value="<?= $modalEdit['jumlah_barang'] ?>">

                        <label for="asalBarang">Asal Barang</label>
                        <input type="text" class="form-control" id="asalBarang" value="<?= $modalEdit['asal_barang'] ?>"
                            disabled>

                        <label for="ketBarang">Keterangan Barang</label>
                        <textarea class="form-control" name="edit_keterangan" id="ketBarang" cols="30"
                            rows="5"><?= $modalEdit['keterangan_barang'] ?></textarea>

                        <label for="gambarBarang">Gambar Barang</label>
                        <input type="file" name="edit_gambar" class="form-control">

                        <input type="hidden" name="id_barang" value="<?= $modalEdit['id_barang'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal Hapus User -->
<?php foreach ($data['barang'] as $hapusModal) { ?>
    <div class="modal fade" id="hapusBarang<?= $hapusModal['id_barang'] ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="<?= BASEURL2 ?>/admin/hapusBarang/<?= $hapusModal['id_barang'] ?>"
                        class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>