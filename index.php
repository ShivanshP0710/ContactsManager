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

    <!-- HOW TO USE -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EASY 5 STEP GUIDE:-</h2>
                    </div>
                    <br>               
                    <br>
                    <div class="featured__item">
                            <ul>
                                <p class="btn btn-info btn-lg btn-block">Step 1:- Register</p>
                                <br>
                                <p class="btn btn-info btn-lg btn-block">Step 2:- Login</p>
                                <br>
                                <p class="btn btn-info btn-lg btn-block">Step 3:- Add New Contact Details</p>
                                <br>
                                <p class="btn btn-info btn-lg btn-block">Step 4:- View Available Contacts</p>
                                <br>
                                <p class="btn btn-info btn-lg btn-block">Step 5:- Manage (Update/Delete) Available Contacts</p>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOW TO USE End -->

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