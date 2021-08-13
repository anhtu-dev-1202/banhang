<!DOCTYPE html>
<html>
<?php
require_once '../db.php';

$sqlCat = "select * from category";
$cat = executeQuery($sqlCat);

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);

    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "insert into product (category_id,name,price,image,description) values ('$category_id', '$name', '$price', '$image', '$description')";
    $res = executeQuery($sql);

    if (count($res) == 0) {
        header('location: '.DOMAIN.'Admin/products.php');
    } else {
        $error = 'Can not create product';
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
                            <h1 class="m-0 text-dark">Add product</h1>
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
                                        <label for="">Price</label><br>
                                        <input type="text" name="price" class="form-control" placeholder="Enter price">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link Image</label><br>
                                        <input type="text" name="image" class="form-control" placeholder="Enter Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Category</label><br>
                                        <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                            <option selected>Choose category</option>
                                            <?php foreach ($cat as $val) : ?>
                                                <option value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">About</label><br>
                                        <textarea name="description" class="form-control" placeholder="Write something"></textarea>
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