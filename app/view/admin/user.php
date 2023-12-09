<div id="daftarUser">
    <div class="navbar-home">
        <h1>Daftar User</h1>
    </div>

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
                foreach ($data['user'] as $rowUser) { ?>
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
                            <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editUserModal<?= $rowUser['id_user'] ?>">Ubah</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#hapusUser<?= $rowUser['id_user'] ?>">Hapus</button>
                        </td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>



    <!-- Modal Box Tambah User -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL2 ?>/admin/tambahUser" method="POST">
                        <label for="nomorInduk">Nomor Induk</label>
                        <input name="nomor_induk" type="text" class="form-control" placeholder="ex: 2241720081"
                            id="nomorInduk">

                        <label for="emailUser">Email User</label>
                        <input name="email_user" type="email" class="form-control"
                            placeholder="ex: tukiyemcakep@gmail.com" id="emailUser">

                        <label for="namaUser">Nama User</label>
                        <input name="nama_user" type="text" class="form-control" placeholder="ex: Tukiyem"
                            id="namaUser">

                        <label for="passwordUser">Password User</label>
                        <input name="pass_user" type="password" class="form-control" placeholder="ex: password"
                            id="passwordUser">

                        <div class="form-group">
                            <label for="levelUser">Level User</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="level_user" value="admin"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="level_user" id="flexRadioDefault1"
                                    value="user" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    User
                                </label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Box Edit User -->
    <?php foreach ($data['user'] as $editUser) { ?>
        <div class="modal fade" id="editUserModal<?= $editUser['id_user'] ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL2 ?>/admin/editUser" method="POST">
                            <label for="nomorInduk">Nomor Induk</label>
                            <input name="nomor_induk" type="text" class="form-control" id="nomorInduk"
                                value="<?= $editUser['nomor_induk'] ?>">

                            <label for="emailUser">Email User</label>
                            <input name="email_user" type="email" class="form-control" id="emailUser"
                                value="<?= $editUser['email_user'] ?>">

                            <label for="namaUser">Nama User</label>
                            <input name="nama_user" type="text" class="form-control" id="namaUser"
                                value="<?= $editUser['nama_user'] ?>">

                            <div class="form-group">
                                <label for="levelUser">Level User</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level_user" value="admin"
                                        id="flexRadioDefault1" <?php echo ($editUser['level'] == 'admin') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Admin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level_user" id="flexRadioDefault2"
                                        value="user" <?php echo ($editUser['level'] == 'user') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        User
                                    </label>
                                </div>
                            </div>

                            <input type="hidden" name="id_user" value="<?= $editUser['id_user'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal Hapus User -->
    <?php foreach ($data['user'] as $hapusModal) { ?>
        <div class="modal fade" id="hapusUser<?= $hapusModal['id_user'] ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda Yakin Ingin Menghapus?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <a href="<?= BASEURL2 ?>/admin/hapusUser/<?= $hapusModal['id_user'] ?>"
                            class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>