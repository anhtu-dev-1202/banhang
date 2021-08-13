<!DOCTYPE html>
<html>
<?php
require_once '../db.php';
$id = $_GET['id'];
$sql = "select * from product where id = $id";
$data = executeQuery($sql, false);

$sqlCat = "select * from category";
$cat = executeQuery($sqlCat);

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);

    $name = $_POST['name'];
    $image = $_POST['image'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];

        $sql1 = "update product set 
                   category_id = '$category_id', 
                   name = '$name', 
                   image = '$image', 
                   price = '$price', 
                   description = '$description' where id = '$id'";

        $res = executeQuery($sql1);
        if (count($res) == 0) {
            header('location: products.php');
        } else {
            $error = 'Không thể cập nhật sản phẩm';
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
                            <h1 class="m-0 text-dark">Sửa sản phẩm</h1>
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
                                        <label for="">Tên sản phẩm</label><br>
                                        <input type="text" name="name" class="form-control" value="<?= $data['name'] ?>" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá sản phẩm</label><br>
                                        <input type="text" name="price" class="form-control" value="<?= $data['price'] ?>" placeholder="Giá sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link ảnh sản phẩm</label><br>
                                        <input type="text" name="image" class="form-control" value="<?= $data['image'] ?>" placeholder="Ảnh sản phẩm">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Danh mục</label><br>
                                        <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                            <option selected>Chọn danh mục</option>
                                            <?php foreach ($cat as $val) : ?>
                                                <option <?= $val['id'] == $data['category_id'] ? 'selected' : '' ?> value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giới thiệu</label><br>
                                        <textarea name="description" class="form-control" placeholder=""><?= $data['description'] ?></textarea>
                                    </div>
                                    <div class="form-group offset-md-4 center">
                                        <button type="submit" name="btnLuu" class="btn btn-success col-md-3 text-center">Lưu</button>
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