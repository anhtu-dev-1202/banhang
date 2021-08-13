<?php
require_once '../db.php';
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
                        <h3>List users</h3>
                    </div>
                    <div class="row text-center">
                       <div class="col-12">
                           <?php
                           $sql = "select * from user order by id desc";
                           $result = executeQuery($sql, true);
                           ?>
                           <table id="user" class="table">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Name</th>
                                   <th>Avatar</th>
                                   <th>Email</th>
                                   <th>Phone</th>
                                   <th>Address</th>
                                   <th>Role</th>
                                   <th>Action</th>
                               </tr>
                               </thead>
                               <tbody>
                               <?php foreach ($result as $key => $u) : ?>
                                   <tr>
                                       <td><?= $key+1 ?></td>
                                       <td><b><?= $u['name'] ?></b></td>
                                       <td><img src="<?= $u['image'] ?>" alt="" width="60px"></td>
                                       <td><?= $u['email'] ?></td>
                                       <td><?= $u['phone'] ?></td>
                                       <td><?= $u['address'] ?></td>
                                       <td><?= $u['role'] == 0 ? 'Admin' : 'User' ?></td>
                                       <td>
                                           <a class="btn btn-sm btn-warning" href="edit-form-user.php?id=<?= $u['id'] ?>">Edit</a>
                                           <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="remove-user.php?id=<?= $u['id'] ?>">Del</a>
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
                $('#user').DataTable();
            } );
        </script>
        <?php include_once './_share/footer.php'; ?>
    </div>
</body>
<?php include_once './_share/js.php'; ?>

</html>