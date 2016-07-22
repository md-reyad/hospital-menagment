    <?php
    require 'class/fontend_function.php';
    $index_obj = new fontend_function();
    if (isset($_POST['btn'])) {
        $msg = $index_obj->login($_POST);
    }
    ?>

    <!DOCTYPE html>

    <html>

        <?php
        include './include/head.php';
        ?>
        <body>
            <?php
            include './include/nav.php';
            include './include/slider.php';
            ?>


            <section class= "starting-text">
                <div class="container">
                    <div class="row">
                        <div class="welcome">
                            <h2 class="welcome-title"><span>Welcome To Our Health Care Clinic</h2>
                            <p class="welcome-txt"<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span></p>
                            <button class="welcome-btn">Read More<i class="icon-on-btn fa fa-long-arrow-right"></i></button>	
                        </div>
                    </div>
                </div>
            </section>

            <?php
            include './include/services.php';
            ?>
            <section id= "testimonial" class="text-center">
                <div class="testimonial-wrapper">
                    <div class="container">
                        <div class="row client-content text-center clearfix">
                            <div class="col-md-8">
                                <div class="row">
                                    <h1>Testimonial</h1>
                                </div>
                                <div class="row">
                                    <div class="sub-headline">
                                        <p>What Our Patients Say About Us</p>
                                    </div>
                                </div>

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div id="client-speech">
                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <i class="fa fa-quote-left"></i>
                                                        </div>
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <p class="client-comment text-center">
                                                                When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.
                                                            </p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <i class="fa fa-quote-right"></i>
                                                        </div>
                                                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                                                            <div class="row">
                                                                <div class="col-md-10 col-md-offset-1">
                                                                    <img class="img-circle img-responsive center-block" src="assets/img/client1.jpg" alt="Image">
                                                                </div>
                                                            </div>
                                                        </div>	
                                                    </div>
                                                    <div class= "row text-center">
                                                        <p class="client-name text-center">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $result = $index_obj->select_doctor();
                                        while ($data = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <div class="item">
                                                <div id="client-speech">
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <i class="fa fa-quote-left"></i>
                                                            </div>
                                                            <div class="col-md-8 col-md-offset-2">
                                                                <p class="client-comment text-center">
                                                                    <?php echo $data['description']; ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <i class="fa fa-quote-right"></i>
                                                            </div>
                                                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                                                                <div class="row">

                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <img class="img-circle img-responsive center-block" src="admin/image/<?php echo $data['image']; ?>" alt="Image">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class= "row text-center">
                                                            <p class="client-name text-center">John Doe</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                    </div>

                                    <a class="left carousel-control testimonial-carousel-control-left" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left fa-3x"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control testimonial-carousel-control-right" href="#carousel-example-generic" role="button" data-slide="next">
                                        <i class="fa fa-angle-right fa-3x"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 appointment-position">
                                <div class= "appointment">

                                    <div class="header text-center">
                                        <h2>Make an Appointment</h2>
                                        <a href="tel:1-800-123-4567" class="number">
                                            <i class="fa fa-phone fa-fw"></i>
                                            1-800-123-4567
                                        </a>
                                        <span class="or">OR</span>
                                        <?php
                                        if (isset($msg)) {
                                            echo $msg;
                                            unset($msg);
                                        }
                                        ?>
                                    </div>
                                    <div id="AppointmentFormResponse"></div>

                                    <!-- form for appointment -->
                                    <div class="row">
                                        <form  method="post" action="">
                                            <div class= "form">
                                                <!--                                                <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                                                                    <input class="form-control" name="fullname" type="text" placeholder="Full Name *" required>
                                                                                                </div>-->
                                                <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                    <input class="form-control" name="email" type="email" placeholder="Email Address *" required>
                                                </div>
                                                <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                    <input class="form-control" name="password" type="password" placeholder="Password *" required>
                                                </div>
                                                <!--                                                <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                                                                    <input class="form-control" id="date" name="date" type="date" placeholder="Appointment Date *" required>
                                                                                                </div>
                                                                                                <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                                                                    <input class="form-control" name="tell" id="tell" type="number" placeholder="Mobile Number ">
                                                                                                </div>-->
                                                <a href="registration.php" style="margin: 0px 20px">click make a registration</a>
                                            </div>

                                            <!--                                            <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                                                            <textarea class="form-control" name="problem" rows="6" placeholder="Your Problem *" required></textarea>
                                                                                        </div>-->
                                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                                                <button class="btn btn-primary send send-services" id="afsubmit" name="btn" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end of form -->
                                </div><!-- end of appointment-->
                            </div>
                        </div> <!--  client-content  -->
                    </div>
                </div>	
            </section>	<!-- testimonial -->


            <?php
            include './include/footer.php';
            ?>


        </body>

        <!-- Mirrored from markup.themewagon.com/healthcare_pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2016 17:50:51 GMT -->
    </html>

