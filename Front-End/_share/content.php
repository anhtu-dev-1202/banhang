<?php
include_once './db.php';
$sql = "select * from category";
$cat = executeQuery($sql, true);
?>
<span class="fl">
    <span class="fla"></span>
</span>
<div class="row">
    <div class="container-fluid p-2">
        <div class="row p-3">
            <div class="col-md-12 pb-4">
                <form action="">
                    <div class="row">
                        <div class="col-md-3">
                            <select class="custom-select" id="inputGroupSelect01" name="price">
                                <option selected value="">Order by price</option>
                                <option <?= isset($_GET['price']) && $_GET['price'] == 'desc' ? 'selected' : '' ?> value="desc">Max</option>
                                <option <?= isset($_GET['price']) && $_GET['price'] == 'asc' ? 'selected' : '' ?> value="asc">Min</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="custom-select" id="inputGroupSelect02" name="cat">
                                <option selected value="">Category</option>
                                <?php foreach ($cat as $val) : ?>
                                    <option <?= isset($_GET['cat']) && $_GET['cat'] == $val['id'] ? 'selected' : '' ?> value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" value="<?= isset($_GET['kq']) ? $_GET['kq'] : '' ?>" name="kq" placeholder="Name products">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
            $sql = "select * from product";

            if (isset($_GET['kq']) && $_GET['kq'] != '') {
                $kq = $_GET['kq'];
                $sql .= " where name like '%$kq%'";
            }

            if (isset($_GET['cat']) && $_GET['cat'] != '') {
                $cat_id = $_GET['cat'];
                $and = isset($_GET['kq']) && $_GET['kq'] != '' ? ' and' : ' where';
                $sql .= "$and category_id = '$cat_id'";
            }

            if (isset($_GET['price']) && $_GET['price'] != '') {
                $price = $_GET['price'];
                $sql .= " order by price $price";
            }

            $result = executeQuery($sql, true);
            ?>
            <?php foreach ($result as $val) : ?>
                <div class="col-md-3 pb-4" data-aos="fade-down">
                    <a href="detail.php?id=<?= $val['id'] ?>" class="text-decoration">
                        <div class="card" style="width:100%">
                            <img class="card-img-top" src="<?= $val['image'] ?>" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title name-pro"><?= $val['name'] ?></h5>
                                <p class="card-text"><b><?= number_format($val['price']) ?> đ</b></p>
                                <p class="overflow-ellipsis"><?= $val['description'] ?></p>
                                <a href="detail.php?id=<?= $val['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<style>
    .name-pro {
        height: 7vh;
    }

    .overflow-ellipsis {
        width: 200px;
        background-color: #fff;
        padding: 15px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>