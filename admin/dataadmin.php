<div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title">Data User</h4>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        User
                    </div>
                    <h4 class="text-right"> <a href="index.php?page=tambah-user" class="btn btn-info btn-sm">
                            <i class="fa fa-user-plus"></i>
                            Tambah User
                        </a> 
                    </h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>username</th>
                                    <th>level</th>
                                    <th> <i class="fa fa-cog"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM user");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['level'] ?></td>
                                        <td width="15%">
                                            <a class="btn btn-warning btn-sm" href="index.php?page=edit-user&id=<?= $data['id_user'] ?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="index.php?page=hapus-user&id=<?= $data['id_user'] ?>">Hapus</a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>