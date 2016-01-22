<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>
    <body>
        <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-1"></div>
            <div class="well col-lg-8 col-md-10 col-sm-12">
                <div class="btn-toolbar pull-right">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
                <h1 class="page-header">Welcome, <?php echo $login_session; ?>!</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    </body>
</html>