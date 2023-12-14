<div id="detailHistory">
    <div class="navbar-home">
        <h1>Inventaris JTI</h1>
    </div>

    <a class="btn btn-primary align-self-start ms-2 mb-3 py-2" href="<?= BASEURL2 ?>/admin/history">
        <img class="me-2" src="<?= BASEURL ?>/img/icon/back.png" alt="Logo Back" width="20">
        Back
    </a>
    <div class="card" style="width: 99%;">
        <h5 class="card-header" style="background-color: #E4E9F7; color: #294172;">Detail History Peminjaman <?= $data['detailHistory'][0]['nama_user'] ?></h5>
        <div class="card-body">
            <div class="table-responsive">
                <table id="detailHistoryTabel" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Barang</td>
                            <td>Jumlah Dipinjam</td>
                            <td>Tanggal Pinjam</td>
                            <td>Tanggal Kembali</td>
                            <td>Keterangan Pinjam</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($data['detailHistory'] as $detailHistory) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $detailHistory['nama_barang'] ?></td>
                            <td><?= $detailHistory['jumlah_dipinjam'] ?></td>
                            <td><?= $detailHistory['waktu_pinjam'] ?></td>
                            <td><?= $detailHistory['waktu_pengembalian'] ?></td>
                            <td><?= $detailHistory['keterangan_pinjam'] ?></td>
                            <td><?= $detailHistory['status_pinjam'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>