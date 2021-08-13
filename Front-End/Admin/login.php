<!DOCTYPE html>
<html>
<?php
    session_start();
    require_once '../db.php';

    if (isset($_SESSION["login"])) {
        header('location: /Admin/index.php');
    }

    if (isset($_POST['btnLuu'])) {
        extract($_REQUEST);

        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $sql = "select * from user where email = '$email' and password = '$pass' limit 1";
        $result = executeQuery($sql, true);
        if (count($result) > 0) {
            if ($result[0]->role == 0) {
                $_SESSION["login"] = true;
                header('location: /Admin/index.php');
            } else {
                header('location: /index.php');
            }
        }
        $error = 'Wrong Email or Password!';
    }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
<div class="wrapper">
    <section class="content pt-5">
        <div class="container-fluid pt-5">
            <div class="row pt-5">
                <div class="col-md-4"></div>
                <div class="col-md-4 center">
                    <div class="p-3">
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php } ?>
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" required class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="">Password<span class="text-danger">*</span></label>
                            <input type="password" name="pass" required class="form-control" placeholder="Enter password">
                        </div>
                        <div class="col-md-6 offset-md-5 center form-group">
                            <button type="submit" name="btnLuu" class="btn btn-success">Login</button>&nbsp;
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
</div>
</body>
</html>