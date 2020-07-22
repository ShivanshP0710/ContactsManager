<?php
          require 'connectionFile.php';
            if (isset($_POST['submit']))
            {
              $eEmail = $_POST['eEmail'];
              $ePassword = $_POST['ePassword'];

              $sql = "INSERT INTO customer 
              (Customer_Email, Customer_Password)
              VALUES ('$eEmail','$ePassword')";
              if(mysqli_query($conn,$sql))
              { 
                  echo "<div class='alert alert-success'>
                          You have been successfully registered
                        </div>";
              }
              else
              {
                echo "<div class='alert alert-danger'>
                        Customer Already Registered with the Entered Email Id
                      </div>" . mysqli_error($conn);
              }
            }
mysqli_close($conn);
?>