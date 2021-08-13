<!DOCTYPE html>
<html>
<title>Danh sách danh mục</title>

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
                        <h3>List categories</h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <?php
                            require_once '../db.php';
                            $sql = "select * from category order by id desc";
                            $result = executeQuery($sql, true);
                            $dem = count($result);
                            ?>
                            <table id="cat" class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($result as $key => $u) : ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $u['name'] ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-warning" href="edit-form-category.php?id=<?php echo $u['id'] ?>">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="remove-cat.php?id=<?php echo $u['id'] ?>">Del</a>
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
                $('#cat').DataTable();
            } );
        </script>
        <?php include_once './_share/footer.php'; ?>
    </div>
</body>
<?php include_once './_share/js.php'; ?>

</html>