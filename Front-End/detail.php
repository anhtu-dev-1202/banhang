<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './_share/head.php'; ?>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <?php include_once './_share/header.php' ?>
            <div class="row container-fluid border p-3 border-lt m-auto">
                <?php
                require_once 'db.php';
                $id = $_GET['id'];
                $sql1 = "select * from product where id = '$id'";
                $result = executeQuery($sql1, true);
                ?>
                <?php foreach ($result as $val) : ?>
                    <div class="col-4">
                        <img class="card-img-top" src="<?= $val['image'] ?>" alt="Card image">
                    </div>
                    <div class="col-8">
                        <div class="card" style="width:100%">
                            <div class="card-body">
                                <h5 class="card-title"><?= $val['name'] ?></h5>
                                <p class="card-text"><?= number_format($val['price']) ?> đ</p>
                                <p class=""><?= $val['description'] ?></p>
                                <a href="detail.php?id=<?= $val['id'] ?>" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <footer>
                <?php include_once './_share/footer.php' ?>
            </footer>
        </div>
    </div>
</body>

</html>