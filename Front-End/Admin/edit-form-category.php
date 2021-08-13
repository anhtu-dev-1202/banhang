<!DOCTYPE html>
<html>

<?php
require_once '../db.php';
$id = $_GET['id'];
$sql = "select * from category where id = $id";
$data = executeQuery($sql, false);

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);

    $name = $_POST['name'];
    $sql1 = "update category set name = '$name' where id = '$id'";
    executeQuery($sql1);
    header('location: category.php');
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
                    <a href="category.php"><img src="./uploads/return.png" width="20" alt=""> &nbsp;&nbsp;Trở lại</a>
                </div>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0 text-dark">Sửa danh mục</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="" enctype="multipart/form-data" method="post">
                                    <input type="number" name="id" hidden value="<?= $data['id'] ?>" id="">
                                    <div class="form-group">
                                        <label for="">Tên danh mục</label><br>
                                        <span class="text-danger"><?= isset($error) ? $error : '' ?></span>
                                        <input type="text" name="name" required class="form-control" value="<?= $data['name'] ?>" placeholder="Tên danh mục">
                                    </div>
                                    <div class="col-md-6 offset-md-5 center form-group">
                                        <button type="submit" name="btnLuu" class="btn btn-success">Lưu</button>&nbsp;
                                        <a href="category.php" class="btn btn-danger">Hủy</a>
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