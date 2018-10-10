<?php
    require_once('includes/authentication.php');
    require_once('../classes/Crud.php');                          
    $crud = new Crud();

    $id = @$_GET['id'];
    $action = @$_GET['action'];

    if($action=='delete' && $id) {
        $result = $crud->delete($id, 'system_users');
        if ($result) {
            //redirecting to the display page (index.php in our case)
            header("Location:system_users.php?msg=dd1");
        }
    }
?>           


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>System users | CZSale</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">
    
        <!-- INCLUDES NAVIGATION -->
        <?php require_once('includes/navigation.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">System users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Search users">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-md-8">
                    <a href="system_users_form.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total system users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php 
                                if(isset($_GET['msg']) && $_GET['msg']=='dd1') {
                                    echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>User has been deleted!</div>";
                                }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="10%">Username</th>
                                            <th width="20%">Email</th>
                                            <th width="15%">Phone</th>
                                            <th>Address</th>
                                            <th width="15%">Status</th>
                                            <th width="15%" class="text-right"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $system_users = $crud->getData("select * from system_users");
                                        $number=1;
                                        foreach ($system_users as $users) {
                                    ?>
                                        <tr>
                                            <td><?php echo $number++; ?></td>
                                            <td><?php echo $users->username; ?></td>
                                            <td><?php echo $users->email; ?></td>
                                            <td><?php echo $users->phone; ?></td>
                                            <td><?php echo $users->address; ?></td>
                                            <td>
                                            <?php
                                                if($users->status==1) { 
                                                    echo '<span class="label label-success">Active</span>';
                                                } else {
                                                    echo '<span class="label label-danger">Inctive</span>';
                                                }
                                            ?>
                                            </td>
                                            <td class="text-right">
                                                <a href="system_users_form.php?id=<?php echo $users->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="system_users.php?action=delete&id=<?php echo $users->id; ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>
</body>

</html>
