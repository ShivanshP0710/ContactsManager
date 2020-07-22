<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>shivanshpagare97@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/shivansh.pagare" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/ShivanshPagare" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/in/shivansh-pagare-7330a1128/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/shivanshpagare/" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <?php
                                if(isset($_SESSION["sessionCEmail"])){
                            ?>                            
                                <li><a href="./addContacts.php">Add New Contact</a></li>
                                <li><a href="./availableContacts.php">Available Contacts</a></li>
                                <li><a href="./logout.php">LogOut</a></li>
                            <?php 
                                } else {
                            ?>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./customerRegister.php">Register</a></li>
                            <li><a href="./customerLogin.php">Login</a></li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
        </div>
    </header>
    <!-- Header Section End -->
    <br>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/mixed.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Welcome To CONTACTS MANAGER</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->