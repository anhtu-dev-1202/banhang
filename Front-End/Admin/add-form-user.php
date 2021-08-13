<!DOCTYPE html>
<html>
<?php
require_once '../db.php';

$sqlCat = "select * from category";
$cat = executeQuery($sqlCat);

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $image = $_POST['image'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    $sql = "insert into user (name,phone,email,password,image,address,role) values ('$name', '$phone', '$email', '$password', '$image', '$address', '$role')";
    $res = executeQuery($sql);

    if (count($res) == 0) {
        header('location: users.php');
    } else {
        $error = 'Không thể thêm mới thành viên';
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
                    <a href="products.php"><img src="./uploads/return.png" width="20" alt=""> &nbsp;&nbsp;Back</a>
                </div>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0 text-dark">Add user</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <span class="text-danger"><?= isset($error) ? $error : '' ?></span><br>
                                <form action="" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="">Name</label><br>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone</label><br>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label><br>
                                        <input type="text" name="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label><br>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link avatar</label><br>
                                        <input type="text" name="image" class="form-control" placeholder="Enter avatar">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address</label><br>
                                        <input type="text" name="address" class="form-control" placeholder="Enter address">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Role</label><br>
                                        <select class="custom-select" id="inputGroupSelect01" name="role">
                                            <option selected>Choose role</option>
                                            <option value="0">Admin</option>
                                            <option value="1">User</option>
                                        </select>
                                    </div>
                                    <div class="form-group offset-md-4 center">
                                        <button type="submit" name="btnLuu" class="btn btn-success col-md-3 text-center">Create</button>
                                        <a href="products.php" class="btn btn-danger col-md-3">Cancel</a>
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