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
          <center><h1><u>Contact Details</u></h1></center>
          <br>
          <br>
          <form action="cUpdate.php" method="post">
            <?php
              require 'connectionFile.php';
                $cId = $_POST["cId"];
                $sql = "SELECT * FROM contactdata WHERE ID = '$cId'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                  $row = mysqli_fetch_assoc($result)
            ?>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="eCName" value="<?php echo $row["Name"] ?>" required >
            </div>
            <div class="form-group">
              <label>MobileNo.</label>
              <input type="text" class="form-control" name="eCMobileNo" value="<?php echo $row["MobileNo"] ?>" required >
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="eCAddress" value="<?php echo $row["Address"] ?>" required >
            </div>
            <input type="hidden" name="id" value="<?php echo $row["ID"] ?>">
            <br>
            <button name="update" type="submit" class="btn btn-primary btn-lg btn-block">Update Contact</button>
            <?php
                }
                else{
                  echo "Error Generated...." . mysqli_error($conn);
                }
                mysqli_close($conn);
            ?>
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