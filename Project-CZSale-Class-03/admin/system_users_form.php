<?php 
    require_once('includes/authentication.php');

    require_once('../classes/Validation.php');
    require_once('../classes/Crud.php');
    $validator = new Validation();
    $crud = new Crud();

    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST') {
        $inputs = $_POST;
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $status = $_POST['status'];
        
        $msg = $validator->check_empty($inputs, array('username', 'email', 'phone'));

        if($msg != null) {
            $msg = $msg;
        } else if($validator->is_email_valid($email) == false) {
            $msg .= "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Please enter valid email</div>";
        } else {
            if($id) {
                if(!empty($_POST['password'])) {
                    $query = "UPDATE system_users SET username='$username', password='$password',email='$email', phone='$phone', address='$address', status='$status' WHERE id=$id";
                } else {
                    $query = "UPDATE system_users SET username='$username',email='$email',phone='$phone',address='$address',status='$status' WHERE id=$id";
                }
                $save = $crud->execute($query);

            } else {
                $save = $crud->execute("INSERT INTO system_users(username, password, email, phone, address, status) VALUES('$username','$password', '$email','$phone','$address','$status')");
                $_POST = array();
            }

            if($save) {
                $msg .= "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>User data has been saved!</div>";
            } else {
                $msg .= "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Something went wrong</div>";
            }
        }


    } else if($method=='GET') {
        $id = @$_GET['id'];
        if($id) {
            $result = $crud->getData("SELECT * FROM system_users WHERE id=$id");
            $_POST =  (array) $result[0];
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
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add system users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php
                                echo @$msg;
                            ?>
                            <form role="form" action="system_users_form.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo @$_POST['id']; ?>">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo @$_POST['username']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo @$_POST['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo @$_POST['phone']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="<?php echo @$_POST['address']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Status: </label>
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="status" id="active" value="1" <?php if(isset($_POST['status']) && $_POST['status']==1) echo 'checked'; else if(!isset($_POST['status'])) echo 'checked'; ?>>Active
                                        </label>
                                    </div>
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="status" id="inactive" value="0"<?php if(isset($_POST['status']) && $_POST['status']==0) echo 'checked'; ?>>Inactive
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="system_users.php" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
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
