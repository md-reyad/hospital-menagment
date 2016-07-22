<?php
require './class/fontend_function.php';
$index_objjs= new fontend_function();
$result=$index_objjs->select_category_wise_doctor($_GET)
?>

    <?php
    include './include/head.php';
    ?>
    <body>
        <?php
        include './include/nav.php';
        
        ?>


        <section id= "starting" class="text-center doctors-section">
            <div class="doctors-wrapper-inner section-wrapper">
                <div cl ass="container">
                    <div class= "row">
                        <h2 class="doctors-headline wow animated fadeInLeft"><span>Our Doctors</span></h2>
                    </div>
                    <div class="row">
                        <div class="sub-headline">
                            <span><a href="index-2.html" style="color:rgb(180,181,183)">Home</a>/Doctors</span>
                        </div>
                    </div>	
                </div>
            </div>
        </section>

        <section class= "doctor-list">
            <div class= "container">
                <div class= "row">
                    <?php
                            while ($row=  mysqli_fetch_assoc($result)){
                    ?>
                    <div class= "col-lg-4 col-sm-6 col-xs-12">
                        <div class= "doctor-meta">
                            <div class= "doctor-img">
                                <img class= "img-responsive center-block" src="admin/image/<?php echo $row['image'];?>" alt="Image"" alt="">
                            </div>
                            <div class= "doctor-info">

                                <div class= "row">
                                    <div class= "doctor-name text-center">
                                       <?php echo  $row['name'];?>
                                    </div>
                                </div>

                                <div class= "row">
                                    <div class= "position text-center">
                                        <?php echo  $row['category_name'];?>
                                    </div>
                                </div>

                                <div class= "row">
                                    <div class= "doctor-des text-center">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recu nisi nostrum sunt cum, consequuntur.
                                        </p>
                                    </div>
                                </div>

                                <div class= "row">
                                    <div class="doctor-social text-center">
                                        <ul class="contact">
                                            <li class="online-contact">
                                                <a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="online-contact">
                                                <a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                            <li class="online-contact">
                                                <a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                            }
                    ?>
                    

                </div>
            </div>
        </section>

        <section id="job">
            <div class= "job-wrapper">
                <div class="container">
                    <div class="row clearfix doctors-appointment-row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h2 >Want To Join Our Team ?</h2>
                            <h4>
                                We are looking for qualified professionals who are passionate about their job. Send us your CV to the email address specified below
                            </h4>

                            <!--  form for job  -->

                            <div class= "form col-sm-10 ">
                                <div id="contactFormResponse"></div>
                                <form id="contactForm" action="http://markup.themewagon.com/healthcare_pro/php/contact_form.php" method="post" enctype="multipart/formdata">
                                    <div class="input-group margin-bottom-sm">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user fa-fw"></i>
                                        </span>
                                        <input class="form-control join-with-us-form" name="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="input-group margin-bottom-sm">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope-o fa-fw"></i>
                                        </span>
                                        <input class="form-control join-with-us-form" name="email" type="text" placeholder="Email address">
                                    </div>
                                    <div class="input-group margin-bottom-sm">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone fa-fw"></i>
                                        </span>
                                        <input class="form-control join-with-us-form" name="message" type="text" placeholder="Tour telephone no.">
                                    </div>
                                    <div class="input-group margin-bottom-sm">
                                        <button type="submit" name="submit" id="cfsubmit" class="btn btn-primary send btn-join">Send</button>
                                    </div>
                                </form>
                            </div>


                            <!-- end of form -->

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 doctors-appointment-right">
                            <div class="block-image background-scale">
                                <img class="img-responsive center-block" src="assets/img/HealthCare_Doctors-7.png" alt="">
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

<?php
include './include/footer.php';
?>

