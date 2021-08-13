<?php
require_once '../db.php';
$sql = "select *, product.name as pro_name, product.id as pro_id from product inner join category on product.category_id = category.id order by product.id desc";
$result = executeQuery($sql, true);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once './_share/head.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once './_share/navbar.php'; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <section class="content">
                    <div class="col text-center">
                        <h3>List products</h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <table id="product" class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($result as $key => $u) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><img src="<?= $u['image'] ?>" alt="" width="80"></td>
                                        <td><?= $u['pro_name'] ?></td>
                                        <td><?= $u['name'] ?></td>
                                        <td><?= number_format($u['price']) ?> đ</td>
                                        <td>
                                            <a class="btn btn-sm btn-warning" href="edit-form-product.php?id=<?= $u['id'] ?>">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="remove-product.php?id=<?= $u['pro_id'] ?>">Del</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script>
            $(document).ready( function () {
                $('#product').DataTable();
            } );
        </script>
        <?php include_once './_share/footer.php'; ?>
    </div>
</body>
<?php include_once './_share/js.php'; ?>

</html>
