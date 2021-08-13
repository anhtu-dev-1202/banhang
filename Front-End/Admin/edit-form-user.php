<!DOCTYPE html>
<html>
<?php
require_once '../db.php';
$id = $_GET['id'];
$sql = "select * from user where id = $id";
$data = executeQuery($sql, false);

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $image = $_POST['image'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $sql1 = "update user set 
                   name = '$name', 
                   phone = '$phone', 
                   email = '$email', 
                   password = '$password', 
                   image = '$image',
                   address = '$address',
                   role = '$role' where id = '$id'";

    $res = executeQuery($sql1);
    if (count($res) == 0) {
        header('location: '.DOMAIN.'Admin/users.php');
    } else {
        $error = 'Không thể cập nhật thành viên';
    }
}
?>

<head>
    <?php include_once './_share/head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php include_once './_share/navbar.php'; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="left">
                <a href="products.php"><img src="./uploads/return.png" width="20" alt=""> &nbsp;&nbsp;Trở lại</a>
            </div>
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h1 class="m-0 text-dark">Sửa thành viên</h1>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 center">
                            <span class="text-danger"><?= isset($error) ? $error : '' ?></span><br>
                            <form action="" enctype="multipart/form-data" method="post">
                                <input type="number" name="id" hidden value="<?= $data['id'] ?>" id="">
                                <div class="form-group">
                                    <label for="">Tên thành viên</label><br>
                                    <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>"
                                           placeholder="Tên thành viên">
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại</label><br>
                                    <input type="text" name="phone" class="form-control" value="<?= $data['phone'] ?>"
                                           placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label><br>
                                    <input type="text" name="email" class="form-control" value="<?= $data['email'] ?>"
                                           placeholder="Nhập email">
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu</label><br>
                                    <input type="password" name="password" class="form-control"
                                           value="<?= $data['password'] ?>" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="">Link avatar</label><br>
                                    <input type="text" name="image" class="form-control" value="<?= $data['image'] ?>"
                                           placeholder="Ảnh đại diện">
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ</label><br>
                                    <input type="text" name="address" class="form-control"
                                           value="<?= $data['address'] ?>" placeholder="Nhập địa chỉ">
                                </div>
                                <div class="form-group">
                                    <label for="">Quyền</label><br>
                                    <select class="custom-select" id="inputGroupSelect01" name="role">
                                        <option selected>Chọn quyền</option>
                                        <option <?= $data['role'] == 0 ? 'selected' : '' ?> value="0">Admin</option>
                                        <option <?= $data['role'] == 1 ? 'selected' : '' ?> value="1">User</option>
                                    </select>
                                </div>
                                <div class="form-group offset-md-4 center">
                                    <button type="submit" name="btnLuu" class="btn btn-success col-md-3 text-center">
                                        Lưu
                                    </button>
                                    <a href="products.php" class="btn btn-danger col-md-3">Hủy</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include_once './_share/footer.php'; ?>
</div>
</body>
<?php include_once './_share/js.php'; ?>

</html>