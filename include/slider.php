<section class= "heading-slider">
			<div class="slider-overlay"></div>
				<div id="owl-demo" class="owl-carousel owl-theme">
 <?php
 $result=$index_obj->slect_image();
 while ($row=  mysqli_fetch_assoc($result)){
 ?>
			          <div class="">
                                      <img src="admin/image/<?php echo $row['slider'];?>" style="width: 100%; height: 560px">
			          <div class="slider-item-overlay"></div>
			          	<div class="slider-content">
			          		<div class="container">
			          			<p><?php echo $row['description'];?></p>
                                                        <br>
                                                </div>
			          	</div>
			          </div>
                                    <?php
 }
                                    ?>
			          
			 
			      </div>

		</section>