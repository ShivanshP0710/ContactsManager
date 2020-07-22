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
        <center><h1><u>Fill All The Details</u></h1></center>
        <br>
        <form action="customerRegister.php" method="post" class="customer_register">
          <div class="form-group">
            <?php require 'cRegister.php';?>
          </div>
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name="eEmail" aria-describedby="emailHelp" placeholder="Enter email" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="ePassword" placeholder="Password" >
          </div>
          <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>  
    </div>
  </div>
</div>
<script>
  $('.customer_register').validate();
</script>

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