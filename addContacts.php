<?php
    session_start();
    if(isset($_SESSION["sessionCEmail"]))
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
        <form action="addContacts.php" method="post">
          <div class="form-group">
            <?php require 'cAdd.php';?>
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="eName" placeholder="Enter Your Name" required >
          </div>
          <div class="form-group">
            <label>Mobile No</label>
            <input type="text" class="form-control" name="eMobileNo" placeholder="Enter Your 10 Digit Mobile No." required >
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="eAddress" placeholder="Enter Your Address" required >
          </div>
            <input type="hidden" name="eCustomerMail" value="<?php echo $_SESSION["sessionCEmail"] ?>">
          <button name="cAdd" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>  
    </div>
  </div>
</div>

    <?php 
      require 'footer.php';
      }
      else
      {
        echo "<script> location.href='index.php'; </script>";
      }
    ?>

</body>

</html>