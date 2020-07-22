<?php
          require 'connectionFile.php';
            if (isset($_POST['cAdd']))
            {
              $eName = $_POST["eName"];
              $eMobileNo = $_POST["eMobileNo"];
              $eAddress = $_POST['eAddress'];
              $eCustomerMail = $_POST['eCustomerMail'];

              $sql = "INSERT INTO contactdata 
              (Name, MobileNo, Address, CustomerMail)
              VALUES ('$eName', '$eMobileNo', '$eAddress', '$eCustomerMail')";
              if(mysqli_query($conn,$sql))
              { 
                  echo "<div class='alert alert-success'>
                          Contact Added Successfully
                        </div>";
              }
              else
              {
                echo "<div class='alert alert-danger'>
                        Error in Adding Contact
                      </div>" . mysqli_error($conn);
              }
            }
mysqli_close($conn);
?>