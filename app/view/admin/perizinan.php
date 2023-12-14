<div id="perizinanBarang">
    <div class="navbar-home">
        <h1>Inventaris JTI</h1>
    </div>

    <div class="card" style="width: 99%;">
        <h5 class="card-header" style="background-color: #E4E9F7; color: #294172;">Perizinan Barang</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabelPerizinan" class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Peminjam</td>
                            <td>Tanggal Pinjam</td>
                            <td>Tanggal Kembali</td>
                            <td>Total Dipinjam</td>
                            <td>Keterangan Pinjam</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['perizinanByDate'] as $perizinan) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $perizinan['nama_user'] ?></td>
                                <td><?= $perizinan['waktu_pinjam'] ?></td>
                                <td><?= $perizinan['waktu_pengembalian'] ?></td>
                                <td><?= $perizinan['total_pinjam'] ?></td>
                                <td><?= $perizinan['keterangan_pinjam'] ?></td>
                                <td>
                                    <a class="btn btn-primary" href="<?= BASEURL2 ?>/admin/detailPerizinan/<?= $perizinan['id_user'] ?>/<?= $perizinan['waktu_pinjam'] ?>/<?= $perizinan['waktu_pengembalian'] ?>">Detail</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>