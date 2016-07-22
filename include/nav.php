<?php

$index_objj = new fontend_function();
$data=$index_objj->select_category();
?>
<section class= "navs">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.php">
                    <span><i class="fa fa-stethoscope"></i></span>
                    HealthCare
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            while ($row=  mysqli_fetch_assoc($data)){
                            ?>
                            <li><a href="CategoryWiseDoctor.php?id=<?php echo $row['id'];?>"  style="font-family: serif;font-size: 15px"><?php echo $row['category_name'];?></a></li>
                            
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    
                    <li><a href="doctors.php">Doctors</a></li>
                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="login.php">Login</a></li>
                            <li><a href="registration.php">Registration</a></li>

                        </ul>
                    </li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div><!-- navbar-collapse -->
        </div><!-- container-fluid -->
    </nav>
</section>