<?php
    session_start();
    if(isset($_SESSION["sessionCEmail"]))
    {
      require 'connectionFile.php';
      require 'Excel/PHPExcel/IOFactory.php';
      if (isset($_POST['upload']))
      {
        $flag=0;

        $inputfilename = $_FILES['filename']['tmp_name'];

        //PHPExcel object to access all the methods of this class
        //With load methodwe can access all the data of excel sheet
        $objPHPExcel = PHPExcel_IOFactory::load($inputfilename);
      
        //getWorksheetIterator is used to access all the data of excel sheet into worksheet variable
        foreach($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            $highestRow = $worksheet->getHighestRow();
            for($row=2; $row<=$highestRow; $row++){
              $html = "<tr>";
              $name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
              $mobileNo = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
              $address = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
              $cMail = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
              $sql = "INSERT into contactdata (Name, MobileNo, Address, CustomerMail)
                      values('".$name."', '".$mobileNo."', '".$address."', '".$cMail."')";
      
              if(mysqli_query($conn, $sql))
              {
                  $flag=1;
              }
            }
        }
      }
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
        <center><h2><u>
          Please View the Prefered Excel File Structure
          <br>
          In Example File Below:-
          <br>
          <a href="./Excel/example.xlsx" style="color:green">example.xlsx</a>
        </u></h2>
        <br>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Import CSV File:</label>
            <input type="file" name="filename">
            <button type="submit" name="upload">Upload</button>
            <br>
            <br>
            <?php              
              if($flag==1)
              {
                  echo "Uploaded Sucessfully";
              }
              else
              {
                  echo "Error in Uploading" . mysqli_error($conn);
              }
            ?>
          </div>
        </form>
        </center>
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