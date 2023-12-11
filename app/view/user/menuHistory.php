<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userHistory.css">
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">


<div class="container">
    <h1>Histori Peminjaman</h1>

    <div class="profile-container">
        <p>NIM:
            <?php echo $nim; ?>
        </p>
        <p>Nama:
            <?php echo $nama; ?>
        </p>

    </div>

    <table id="daftarBarangTabel" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Pinjam</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['peminjaman'] as $peminjaman) { ?>
                <tr>
                    <td>
                        <?= $peminjaman['waktu_pinjam']; ?>
                    </td>
                    <td>
                        <?= $peminjaman['waktu_pengembalian']; ?>
                    </td>
                    <?php foreach ($data['barang'] as $barang) { ?>
                        <td>
                            <?= $barang['kode_barang']; ?>
                        </td>
                        <td>
                            <?= $barang['nama_barang']; ?>
                        </td>
                        <td>
                            <?= $peminjaman['jumlah_dipinjam']; ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<form>