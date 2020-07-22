<?php
require 'connectionFile.php';
if (isset($_POST['update']))
{
  $id = $_POST["id"];
  $eCName = $_POST["eCName"];
  $eCMobileNo = $_POST["eCMobileNo"];
  $eCAddress = $_POST['eCAddress'];
  $sql = "UPDATE contactdata SET Name='$eCName', MobileNo='$eCMobileNo', Address='$eCAddress' WHERE ID='$id'";

  if (mysqli_query($conn, $sql)) {
    echo "<script> location.href='availableContacts.php'; </script>";;
  } 
  else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  }
?>