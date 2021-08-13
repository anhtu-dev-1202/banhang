<!DOCTYPE html>
<html>

<?php

require_once '../db.php';

if (isset($_POST['btnLuu'])) {
    extract($_REQUEST);
    $name = $_POST['name'];

        //SQL UPDATE
        $sql = "insert into category(name) values ('$name')";
        $res = executeQuery($sql);
        if (count($res) == 0) {
            header('location: category.php');
        } else {
            $error = 'Can not create category';
        }
}

?>
<title>Add category</title>

<head>
    <?php include_once './_share/head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once './_share/navbar.php'; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="left">
                        <a href="category.php"><img src="./uploads/return.png" width="20" alt=""> &nbsp;&nbsp; Back</a>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0 text-dark">Add category</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="">Name category</label><br>
                                        <span class="text-danger"><?= isset($error) ? $error : '' ?></span>
                                        <input type="text" required name="name" class="form-control" placeholder="Enter name category">
                                    </div>
                                    <div class="col-md-6 offset-md-5 center form-group">
                                        <button type="submit" name="btnLuu" class="btn btn-success">Create</button>&nbsp;
                                        <a href="category.php" class="btn btn-danger">Cancel</a>
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