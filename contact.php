<?php
require 'class/fontend_function.php';
$index_objjs= new fontend_function();
$dataa=$index_objjs->select_contact();
$row=  mysqli_fetch_assoc($dataa);
?>

    <?php
    include './include/head.php';
    ?>
    <body>
        <?php
        include './include/nav.php';
        
        ?>
		<section id= "contact" class="text-center contact-section">
			<div class="contact-wrapper section-wrapper">
				<div class="container">
					<div class= "row">
						<h2 class="contact-headline"><span>Contact US</span></h2>
					</div>
					<div class="row">
						<div class="sub-headline">
							<span><a href="index-2.html" style="color:rgb(180,181,183)">Home</a>/contact</span>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<section class="contact-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 contact-article">
						<h2>Have A Question?</h2>
						<p class="contact-left-content-p">
							Mauris nec ligula dui, fermentum nisl ut magna dolor, rhoncus wisi. In lacus sagittis luctus, nisl eros, sit amet tempor et, accumsan eget, pede. Suspendisse est. Ut rhoncus eu, pede. Vestibulum ante ipsum dolor lorem, iaculis mi. Pellentesque eu urna eget dolor. Duis luctus a, dolor. Duis ac sapien.
						</p>
						<p class="contact-left-content-p">
							Praesent lacinia dapibus, accumsan vesti bulum. Pellen tesque molestie mollis.Estibulum dapibus, maurimalesfames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus ultricies gravida vitae...
						</p>
					</div>
					<div class="col-md-6 contact-form">
						<h2>Leave A Message</h2>
						<div id="contactFormResponse">
							
						</div>
						<form id="contactForm" action="http://markup.themewagon.com/healthcare_pro/php/contact_form.php" method="post" enctype="multipart/formdata">
							<div class="form-group">
							    <input type="text" class="form-control contact-form-control" name="name" id="name" placeholder="Full Name">
							</div>
							<div class="form-group">
							    <input type="email" class="form-control contact-form-control" name="email" id="email" placeholder="Email Address">
							</div>
							<div class="form-group">
							    <textarea class="form-control contact-form-control" type="text" id="message" name="message" placeholder="Type your message here..."></textarea>
							</div>
							<button type="submit" name="submit" id="cfsubmit" class="contact-form-btn btn btn-primary" required>Send Message</button>
						</form>
					</div>
					
				</div>
				<div class="row">
					<h2 class='text-center contact-details-heading'>Contact Details</h2>
					<div class="col-md-6">
						<div id="map-canvas" class="contact-wrapper"></div>
					</div>
					<div class="col-md-6 contact-address">
						<div class="contact-block clearfix">
							<div class="left-block">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="right-block">
								<h4 class="contact-block-heading">Office Address</h4>
                                                                <p class="contact-block-paragrap"><?php echo $row['address'] ;?></p>
							</div>
						</div>
						<div class="contact-block clearfix">
							<div class="left-block">
								<i class="fa fa-phone"></i>
							</div>
							<div class="right-block">
								<h4 class="contact-block-heading">Phone</h4>
								<p class="contact-block-paragrap"><?php echo $row['number1'] ;?></p>
								<p class="contact-block-paragrap">Mobile:<?php echo $row['number2'] ;?></p>
							</div>
						</div>
						<div class="contact-block clearfix">
							<div class="left-block">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="right-block">
								<h4 class="contact-block-heading">Email Address</h4>
								<p class="contact-block-paragrap"><?php echo $row['email'] ;?></p>
								<p class="contact-block-paragrap">example@Miracle.com</p>
							</div>
						</div>

						<ul class="contact left-align-contact">
				        	<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Facebook" class=""><i class="fa fa-facebook"></i></a>
							</li>
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Twitter" class=""><i class="fa fa-twitter"></i></a>
							</li>
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Google +" class=""><i class="fa fa-google-plus"></i></a>
							</li>
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class=""><i class="fa fa-instagram"></i></a>
							</li> 
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class=""><i class="fa fa-pinterest"></i></a>
							</li>
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Connect with Skype" class=""><i class="fa fa-skype"></i></a>
							</li>
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class=""><i class="fa fa-instagram"></i></a>
							</li>
							<li class= "socials-icons socials-icons-square text-center">
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class=""><i class="fa fa-pinterest"></i></a>
							</li>
				      	</ul>
					</div>
				</div>
			</div>
		</section>


		<?php
                include './include/footer.php';
                ?>