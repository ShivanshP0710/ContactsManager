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
    
    <!-- Items Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Select From Items Below</h2>
                    </div>                    
                    <?php
                        require 'connectionFile.php';

                            $rItems = $_SESSION["sessionCEmail"];
                                
                            $sql = "SELECT * FROM contactdata WHERE CustomerMail = '$rItems'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                            {
                    ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Mobile No.</th>
                                <th>Address</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) 
                                    {
                            ?>
                                <tr>
                                
                                    <td><?php echo $row["ID"] ?></td>
                                    <td><?php echo $row["Name"] ?></td>
                                    <td><?php echo $row["MobileNo"] ?></td>
                                    <td><?php echo $row["Address"] ?></td>  
                                    <td>
                                        <form action="updateContact.php" method="post">
                                            <button name="cUpdate" type="submit" class="btn btn-primary">Update</button>
                                            <input type="hidden" name="cId" value="<?php echo $row["ID"] ?>">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="cDelete.php" method="post">
                                            <button name="cDelete" type="submit" class="btn btn-danger">Delete</button>
                                            <input type="hidden" name="cId" value="<?php echo $row["ID"] ?>">
                                        </form>
                                    </td>
                                </tr>                              
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
<!-- Items Section End -->

<?php
        } 
        else 
        {
            echo "<div class='alert alert-danger'>
                    No Items Available....
                  </div>" . mysqli_error($conn) . "<br>";
            echo "<div class='col-lg-12'>
                    <div class='shoping__cart__btns'>
                        <a href='./addContacts.php' class='primary-btn cart-btn cart-btn-right'><span class='fa fa-arrow-right'></span> ADD CONTACTS</a>
                    </div>
                  </div> <br>";
        }
    mysqli_close($conn);
?>

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