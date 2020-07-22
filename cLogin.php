<?php
    require 'connectionFile.php';

            if (isset($_POST['login']))
            {
              $eLEmail = $_POST['eLEmail'];
              $eLPassword = $_POST['eLPassword'];
              
              $sql = "SELECT * FROM customer WHERE Customer_Email = '$eLEmail' AND Customer_Password = '$eLPassword'";
              $result = mysqli_query($conn, $sql);
              if ($row = mysqli_fetch_assoc($result)) 
              {
                $_SESSION["sessionCEmail"]=$row["Customer_Email"];
                echo "<script> location.href='availableContacts.php'; </script>";
              } 
              else 
              {
                echo "<div class='alert alert-danger'>
                        No Customer Found | Please Register
                      </div>" . mysqli_error($conn);
              }
            }
            mysqli_close($conn);
?>