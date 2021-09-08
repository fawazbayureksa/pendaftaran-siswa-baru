<div class="page-breadcrumb">
    <div class="row">
        <div class='col-6'>
            <h4 class="page-title">Edit user</h4>

        </div>
    </div>
</div>
<?php

$query = mysqli_query($db,"SELECT * FROM user where id_user = '$_GET[id]'");
while ($data = mysqli_fetch_array($query)){
    ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <div calsss="card">
                <div class="card-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="">username</label>
                            <input type="text" name="username" id="" value="<?=$data['username'] ?>" class="form-control" autocomplate="off">
                        </div>
                        <div class="form-grup">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control" autocomplate="off">
                        </div>
                        <div class="form-grup">
                            <label for="">komfirmasi password</label>
                            <input type="text" name="password2" class="form-control" autocomplate="off">
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
<?php }
?>
<?php
if (isset($_POST['simpan'])) {

    $name = $_POST['username'];
    $pass = $_POST['password'];
    $pass2 = $_POST['password2'];
    $level = $_POST['level'];

    if($pass !== $pass2) {

        echo "<script>alert('kata sandi tidak cocok')</script>";
        echo "<meta http.equiv='refresh' content='1; url=edituser.php'>";
    } else {

       mysqli_query($db,"UPDATE user set username='$name', password='$pass', level='$level' where id_user ='$_GET[id]'");

    echo "<script>alert('data berhasil di ubah')</script>";
    echo "<script>location='index.php?page=data-user'</script>"; 
    
    }
}
?>