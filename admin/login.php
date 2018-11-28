<?php session_start(); ?>
<?php ob_start(); ?>
<?php error_reporting(0); ?>
<?php include('includes/db.php'); ?>

<?php

$message = "";
if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        
        $query = "SELECT * FROM admin ";
        $query .= "WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die('Query failed' . mysqli_error($conn));
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
                
                $db_email = $row['email'];
                $db_pass  = $row['password'];
            }

            if ($email === $db_email && $password === $db_pass) {
                
                $_SESSION['user'] = $db_email;
                header('location:index.php');
            } else {

                $message = "<p>Invalid username or password</p>";
            }
        }
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

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- MetisMenu CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!-- Custom Fonts -->
        <!-- <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

        
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" method="post">
                                <fieldset>
                                    <?php echo $message; ?>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-lg btn-success btn-block" value="Login">
                                    </div>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>