<?php
require 'class/fontend_function.php';
$index_objjss = new fontend_function();
if(isset($_POST['btn'])){
   $msg= $index_objjss->registration($_POST);
}
?>

<?php
include './include/head.php';
?>
<body>
    <?php
    include './include/nav.php';
    ?>

    <section class="service-title text-center">
        <div class="service-wrapper section-wrapper">
            <div class="container">
                <div class= "row">
                    <h2 class="headline"><span>Featured Services</span></h2>
                </div>
                <div class="row">
                    <div class="sub-headline">
                        <span><a href="index-2.html" style="color:rgb(180,181,183)">Home</a>/Services</span>
                    </div>
                </div>	
            </div>
        </div>
    </section>

    <section class="special-service-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="special-service">
                        <h2><span>Special Services</span></h2>
                        <div class="service-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active">
                                    <a href="#all" role="tab" data-toggle="tab">All</a>
                                </li>
                                <li>
                                    <a href="#dental" role="tab" data-toggle="tab">Dental Service</a>
                                </li>
                                <li>
                                    <a href="#diagnostic" role="tab" data-toggle="tab">Diagnostic Serivce</a>
                                </li>
                                <li>
                                    <a href="#rehabilitation" role="tab" data-toggle="tab">Rehabilitation Serivce</a>
                                </li>
                                <li>
                                    <a href="#donor" role="tab" data-toggle="tab">Donation Serivce</a>
                                </li>		
                            </ul>

                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="all">

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/diagnostic1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Latest Diagnostic Technology</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full<i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/dental1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Complete Dental Care</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/donor1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Blood Donation </h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/rehabilitation2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Elderly Care</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="dental">
                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/dental1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Always Take Care of Your Teeth</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>
                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/dental2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Complete Dental Care</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="diagnostic">

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/diagnostic1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Latest Diagnostic Technology</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/diagnostic2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Women's Diagnostic Imaging In A Comforting Environment.</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="rehabilitation">

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/rehabilitation1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Enhanced Rehabilitation</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/rehabilitation2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Elderly Care</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="donor">

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/donor1.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>You're Welcome To Donate Our Clinic</h3></a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                    <div class="row service-item">
                                        <div class="col-md-5">
                                            <a href="#"><img class="img-responsive center-block" src="assets/img/donor2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-md-7">
                                            <a href="#"><h3>Blood Donation - You can also save life</h3></a>      
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae earum quod aliquid nulla ab obcaecati aut quae, illum voluptates maxime. Mollitia eius voluptas laboriosam odio quod quisquam aliquid quas obcaecati.
                                            </p>
                                            <a href="#" class="service-rm-btn btn btn-primary">
                                                View Full <i class="icon-on-btn fa fa-long-arrow-right"></i></a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class= "appointment special-service-apointment">

                        <div class="header text-center">
                            <h2>Make an Appointment</h2>
                            <a href="#" class="number">
                                <i class="fa fa-phone fa-fw"></i>
                                1-800-123-4567
                            </a>
                            <span class="or">OR</span>
                            <?php
                            if(isset($msg)){
                                echo $msg;
                                unset($msg);
                            }
                            ?>
                        </div>
                        <div id="AppointmentFormResponse"></div>

                        <!-- form of appointment -->
                        <div class="row">
                            <form method="post" action="">
                                <div class= "form">
                                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <input class="form-control" name="name" type="text" placeholder="Full Name *" required>
                                    </div>
                                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <input class="form-control" name="email" type="email" placeholder="Email Address *" required>
                                    </div>
                                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <input class="form-control" id="date" name="password" type="password" placeholder="password" required>
                                    </div>
                                    <div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                        <input class="form-control" name="number" id="tell" type="number" placeholder="Mobile Number ">
                                    </div>
                                </div>
                              
                                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                                    <button class="btn btn-primary send send-services" id="afsubmit" name="btn" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                        <!-- end of form -->
                    </div><!-- end of appointment-->
                </div>
            </div>
        </div>
    </section>

    <?php
    include './include/footer.php';
    ?>

