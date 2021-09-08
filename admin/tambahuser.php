<div class="page-breadcrumb">
    <div class="row">
        <div class='col-6'>
            <h4 class="page-title">Tambah user</h4>

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <div calsss="card">
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="">username</label>
                            <input type="text" name="username" id="" class="form-control" autocomplate="off">
                        </div>
                        <div class="form-grup">
                            <label for="">password</label>
                            <input type="text" name="password" id="" class="form-control" autocomplate="off">
                        </div>
                        <div class="form-group">
                            <label for="">level</label>
                            <select name="level" class="form-control" id="" autocomplate="off">
                                <option value="1">admin</option>
                                <option value="2">panitia</option>
                            </select>
                        </div>
                       
                            <button name="simpan" class="btn btn-primary btn-sm"> <i class="fa fa-paper-plane"></i> simpan</button>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {

    $name = $_POST['username'];
    $pass = $_POST['password'];
    $level = $_POST['level'];

    mysqli_query($db, "INSERT INTO user (username,password,level)values ('$name','$pass','$level')");

    echo "<script>alert('data berhasil disimpan')</script>";
    echo "<script>location='index.php?page=data-user'</script";
}

?>