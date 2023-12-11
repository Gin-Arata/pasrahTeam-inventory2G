<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userHistory.css">
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">


<div class="container mt-5">
    <h1>Histori Peminjaman</h1>

    <div class="profile-container">
        <p>NIM:
            <?= $_SESSION['userNim'] ?>
        </p>
        <p>Nama:
            <?= $_SESSION['userName'] ?>
        </p>

    </div>

    <div class="table-responsive">
        <table id="daftarBarangTabel" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pinjam</th>
                    <th>Status Pinjam</th>
                    <th>Pesan Penolakan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($data['peminjaman'] as $peminjaman) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td>
                            <?= $peminjaman['waktu_pinjam']; ?>
                        </td>
                        <td>
                            <?= $peminjaman['waktu_pengembalian']; ?>
                        </td>
                        <td>
                            <?= $peminjaman['kode_barang']; ?>
                        </td>
                        <td>
                            <?= $peminjaman['nama_barang']; ?>
                        </td>
                        <td>
                            <?= $peminjaman['jumlah_dipinjam']; ?>
                        </td>
                        <td>
                            <?= $peminjaman['status_pinjam'] ?>
                        </td>
                        <td>
                            <?= $peminjaman['pesan_penolakan'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<form>