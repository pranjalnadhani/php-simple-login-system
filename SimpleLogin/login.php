<!DOCTYPE html>

<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid!";
    } else {
        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];

        include '/db_connect.php';

        // SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'", $connection) or die(mysql_error());
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
        mysql_close($connection); // Closing Connection
    }
}
?>

<html>
    <?php include 'header.php'; ?>
    <body>
        <div id="container">
            <div class="row">
                <div class="col-lg-4 col-md-3"></div>
                <div class="well col-lg-4 col-md-6 col-sm-12">
                    <div class="btn-toolbar">
                        <a href="index.php" class="btn btn-info">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                            Head home
                        </a>
                    </div>
                    <br />
                    <?php
                    if (!empty($error)) {
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Login error:</strong> <?php echo $error; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <legend>Sign in</legend>
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Username:</label>
                            <div class="col-sm-9">
                                <input id="name" name="username" placeholder="Enter Username" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password:</label>
                            <div class="col-sm-9">
                                <input id="name" name="password" placeholder="Enter Password" type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-offset-3 col-sm-9">
                            <input name="submit" type="submit" value="Login" class="btn btn-primary">
                            <input type="reset" class="btn btn-default">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3"></div>
            </div>
        </div>
    </body>
</html>