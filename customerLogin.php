<?php
    session_start();

    if(!isset($_SESSION["sessionCEmail"]))
    {
?>
<!DOCTYPE html>
<html>

<head>

    <?php require 'head.php';?>

</head>

<body>

    <?php require 'header.php';?>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center><h1><u>Customer Login</u></h1></center>
            <br>
            <form method="post" class="form_login" name="customer_Login">
                <div class="form-group">
                    <?php require 'cLogin.php';?>
                </div>
                <br>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="eLEmail" placeholder="Enter email" >
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="eLPassword" placeholder="Enter Password" >
                </div>
                <button name="login" type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </form>
        </div>
    </div>
</div>

<?php 
    require 'footer.php';
    }
    else
    {
        echo "<script> location.href='availableContacts.php'; </script>";
    }
?>

</body>

</html>