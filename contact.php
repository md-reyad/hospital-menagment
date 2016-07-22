<?php
require 'class/fontend_function.php';
$index_objjs= new fontend_function();
$dataa=$index_objjs->select_contact();


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
                                                    <span><a href="index.php" style="color:rgb(180,181,183)">Home</a>/contact</span>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<section class="contact-content">
			<div class="container">
				
				<div class="row">
					<h2 class='text-center contact-details-heading'>Contact Details</h2>
					<div class="col-md-6">
                                            <div  class="contact-wrapper">
                                                 <div id="googlemap" class="gmap gmap_custom_1 full" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 146px 239px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 218px; top: -161px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 218px; top: 95px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 474px; top: -161px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 474px; top: 95px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -38px; top: -161px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -38px; top: 95px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 730px; top: -161px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 730px; top: 95px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 218px; top: -161px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 218px; top: 95px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 474px; top: -161px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 474px; top: 95px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -38px; top: -161px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -38px; top: 95px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 730px; top: -161px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 730px; top: 95px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 474px; top: 95px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6154!3i3540!4i256!2m3!1e0!2sm!3i345013741!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=7826" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 218px; top: 95px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6153!3i3540!4i256!2m3!1e0!2sm!3i345013741!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=61369" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 474px; top: -161px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6154!3i3539!4i256!2m3!1e0!2sm!3i345013741!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=48289" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -38px; top: 95px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6152!3i3540!4i256!2m3!1e0!2sm!3i345013825!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=1079" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 730px; top: -161px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6155!3i3539!4i256!2m3!1e0!2sm!3i345013609!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=95588" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 730px; top: 95px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6155!3i3540!4i256!2m3!1e0!2sm!3i345013609!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=55125" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 218px; top: -161px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6153!3i3539!4i256!2m3!1e0!2sm!3i345013933!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=77268" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -38px; top: -161px; transition: opacity 200ms ease-out;"><img src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i13!2i6152!3i3539!4i256!2m3!1e0!2sm!3i345013933!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=130811" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;"><p class="gm-style-pbt">Use two fingers to move the map</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 146px 239px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=23.712565,90.43856&amp;z=13&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 319px; top: 84px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data Â©2016 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 164px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data Â©2016 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data Â©2016 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@23.7125653,90.4385599,13z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 22px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 36px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left-width: 0px; min-width: 40px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satellite</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 36px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div><div draggable="false" class="gm-style-cc" style="position: absolute; -webkit-user-select: none; height: 14px; line-height: 14px; right: 71px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>1 km&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 57px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; left: 0px; bottom: 0px; background-color: rgb(255, 255, 255);"></div><div style="position: absolute; height: 2px; left: 1px; bottom: 1px; right: 1px; background-color: rgb(102, 102, 102);"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; bottom: 1px; right: 1px; background-color: rgb(102, 102, 102);"></div></div></div></div></div></div>

        <!-- Google Map Scripts -->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
            var latlng = new google.maps.LatLng(0, 0);
            var myOptions = {
                zoom: 14,
                center: latlng,
                scrollwheel: true,
                scaleControl: true,
                disableDefaultUI: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var googlemap = new google.maps.Map(document.getElementById("googlemap"),
                    myOptions);

            var geocoder_googlemap = new google.maps.Geocoder();
            var address = 'tejgaon Foot Over Bridge, Dhaka';
            geocoder_googlemap.geocode({'address': address}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    googlemap.setCenter(results[0].geometry.location);

                    // Marker Image
                    var image = "photos/office.png";
                    var marker = new google.maps.Marker({
                        map: googlemap,
                        icon: image,
                        position: googlemap.getCenter()
                    });
                    // Infobox Text
                    var contentString = 'Welcome!';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(googlemap, marker);
                    });

                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });                     
        </script>
                                                
                                            </div>
					</div>
					<div class="col-md-6 contact-address">
						<div class="contact-block clearfix">
							<div class="left-block">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="right-block">
                                                            <?php
                                                            $row=  mysqli_fetch_assoc($dataa);
                                                          
                                                           
                                                            ?>
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
								<a href="http://www.facebook.com" data-toggle="tooltip" title="Share in Facebook" class=""><i class="fa fa-facebook"></i></a>
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