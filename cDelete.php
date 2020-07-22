<?php
          require 'connectionFile.php';
            if (isset($_POST['cDelete']))
            {
              $cId = $_POST["cId"];
              $sql = "DELETE FROM contactdata WHERE ID = '$cId'";
              if(mysqli_query($conn,$sql))
              {  
                echo "<script> location.href='availableContacts.php'; </script>";
              }
              else
              {
                echo "<div class='alert alert-danger'>
                        Error in Deleting Item
                      </div>" . mysqli_error($conn);
                echo "<script> location.href='availableContacts.php'; </script>";
              }
            }
mysqli_close($conn);
?>