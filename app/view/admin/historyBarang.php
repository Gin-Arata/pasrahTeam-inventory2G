<div id="historyBarang">
    <div class="navbar-home">
        <h1>Inventaris JTI</h1>
    </div>

    <div class="card" style="width: 99%;">
        <h5 class="card-header" style="background-color: #E4E9F7; color: #294172;">History Peminjaman Barang</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table id="historyBarangTabel" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Peminjam</td>
                            <td>Total Barang Dipinjam</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1;
                        foreach ($data['history'] as $history) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $history['nama_user'] ?></td>
                                <td><?= $history['total_pinjam'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="<?= BASEURL2 ?>/admin/detailHistory/<?= $history['id_user'] ?>">Detail</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>