<div id="daftarUser">
    <h1 class="mb-3 mt-2">Daftar User</h1>

    <div class="tabelUser table-responsive">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#userModal">Tambah
            User</button>
        <table id="daftarUserTabel" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Nomor Induk</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <!-- Password admin 1234 -->
                <?php
                $no = 1;
                foreach($data['user'] as $rowUser) { ?>
                    <tr>
                        <td>
                            <?= $no ?>
                        </td>
                        <td>
                            <?= $rowUser['nama_user'] ?>
                        </td>
                        <td>
                            <?= $rowUser['nomor_induk'] ?>
                        </td>
                        <td>
                            <?= $rowUser['email_user'] ?>
                        </td>
                        <td>
                            <?= $rowUser['level'] ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">Ubah</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>



    <!-- Modal Box Tambah Barang-->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <label for="nomorInduk">Nomor Induk</label>
                        <input type="text" class="form-control" placeholder="ex: 2241720081" id="nomorInduk">

                        <label for="emailUser">Email User</label>
                        <input type="text" class="form-control" placeholder="ex: tukiyemcakep@gmail.com" id="emailUser">

                        <label for="namaUser">Nama User</label>
                        <input type="text" class="form-control" placeholder="ex: Tukiyem" id="namaUser">

                        <label for="passwordUser">Password User</label>
                        <input type="password" class="form-control" placeholder="ex: password" id="passwordUser">

                        <div class="form-group">
                            <label for="levelUser">Level User</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    User
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
</div>