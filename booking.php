<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="assets/images/icons/favicon-01.png.pagespeed.ce._ypEp_RUoK.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4/css/A.font-awesome.min.css.pagespeed.cf.jBrWCt-D4j.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic-font/css/A.material-design-iconic-font.min.css.pagespeed.cf.cH_yt0vhY6.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons/css/A.simple-line-icons.css.pagespeed.cf.QH3-ZJdFiV.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/linearicons/A.icon-font.min.css.pagespeed.cf.qlOAeWWsvz.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap/bootstrap.min.css.pagespeed.ce.P_urNQdI6E.css">
	<!--===============================================================================================-->
	<style>.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;overflow:hidden;display:block;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;left:0;top:0;display:block;margin-left:auto;margin-right:auto}.slick-track:before,.slick-track:after{content:"";display:table}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{float:left;height:100%;min-height:1px;display:none}[dir="rtl"] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}</style>
	<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/libs/magnific-popup/A.magnific-popup.css.pagespeed.cf.U-wMxxxiLR.css">
	<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/A.select2.min.css.pagespeed.cf.5AEFGUR7RP.css">
	<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/libs/animate/A.animate.css.pagespeed.cf.DnRU1-wrYV.css">
	<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/libs/animsition/A.animsition.min.css.pagespeed.cf.pm7xv_A0pw.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/libs/daterangepicker/A.daterangepicker.css.pagespeed.cf.iSHAEleaYJ.css">
	<!--===============================================================================================-->
	<style>.parallax100{background-attachment:fixed;background-position:center 0;background-repeat:no-repeat;background-size:cover}@media (max-width:991px){.parallax100{background-attachment:inherit}}</style>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/A.style.css.pagespeed.cf.-LcYwKe0cq.css">
	<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- main global header menu -->

	<?php include ("./header.php"); ?>

<!-- ./main header menu end -->
	
	<!-- Title Page -->
	<div class="title-page" style="background-image:url('assets/images/background/title-bg.jpeg')">
		<div class="container">
			<h1 class="main-title">
				<span style="color:white;">Booking </span> 
			</h1>

			<!-- <ul class="breadcrumbs">
				<li>
					<a href="home1.html">
						Home
					</a>
				</li>

				<li>
					Booking
				</li>
			</ul> -->
		</div>
	</div>
	<!-- end Title Page -->

	<!-- content booking-page -->
	<div class="sec--content--booking-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-none d-lg-block">
					<div class="hun-element-image layout-1">
						<img src="assets/images/booking/booking-bg.jpg" alt="IMG">
					</div>
				</div>

				<div class="col-lg-6">
					<form class="book-service-form-02">
						<div class="heading-form">
							<h3 class="title-form">
								Book services
							</h3>

							<img class="line-heading" src="assets/images/icons/wave-line-03.png.pagespeed.ce.kj9JcxrKCT.png" alt="IMG">
						</div>

						<div class="row">
							<div class="col-sm-6">
								<label class="wrap-input">
									<input type="text" placeholder="Full name *">

									<i class="icon-user"></i>
								</label>
							</div>

							<div class="col-sm-6">
								<label class="wrap-input">
									<input type="text" placeholder="Phone number *">

									<i class="icon-call-out"></i>
								</label>
							</div>

							<div class="col-sm-6">
								<label class="wrap-input js-call-datepicker" data-drop="down" data-drop-inside="true">
									<input type="text" name="date" autocomplete="off">

									<i class="icon-calendar"></i>
								</label>
							</div>

							<div class="col-sm-6">
								<label class="wrap-input js-call-select2" data-style="layout-1">
									<select>
										<option>10:00 AM</option>
										<option>11:00 AM</option>
										<option>1:00 PM</option>
										<option>2:00 PM</option>
										<option>3:00 PM</option>
										<option>4:00 PM</option>
										<option>5:00 PM</option>
										<option>6:00 PM</option>
										
									</select>

									<i class="icon-clock"></i>
								</label>
							</div>

							<div class="col-sm-6">
								<label class="wrap-input js-call-select2" data-style="layout-1">
									<select>
										<option>Services *</option>
										<option>Anxiety Relief</option>
										<option>Depression Relief</option>
										<option>Mind Training</option>
									</select>

									<i class="lnr lnr-chevron-down"></i>
								</label>
							</div>

							<div class="col-sm-6">
								<label class="wrap-input js-call-select2" data-style="layout-1">
									<select>
										<option>Select Time Period</option>
										<option>Two Weeks</option>
										<option>Three Weeks</option>
										<option>Four Weeks</option>
										<option>Five Weeks</option>
									</select>

									<i class="lnr lnr-chevron-down"></i>
								</label>
							</div>

							<div class="col-12">
								<label class="wrap-input">
									<textarea placeholder="Your Message Here*"></textarea>
								</label>

								<button class="hun-button size-normal shape-round style-fill-color">
									Make appointment
								</button>
							</div>
						</div>
					</form>

					
				</div>
			</div>
		</div>
	</div>
	<!-- end content booking-page -->

		<!-- main global footer  -->

		<?php include ("./footer.php"); ?>

<!-- ./main footer end -->


<!--===============================================================================================-->
<script src="assets/libs/jquery/jquery-1.11.0.min.js.pagespeed.jm.VDIv7VBTRR.js"></script>
<!--===============================================================================================-->
<script src="assets/libs/bootstrap/popper.js.pagespeed.jm.MTOaNDk5IL.js"></script>
<script src="assets/libs/bootstrap/bootstrap.min.js.pagespeed.jm.rYC60r3aq8.js"></script>
<!--===============================================================================================-->
<script src="assets/libs/slick/slick.js.pagespeed.jm.yt03u0ouJz.js"></script>
<!--===============================================================================================-->
<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js.pagespeed.jm.rIDxOE9-fA.js"></script>
<!--===============================================================================================-->
<script src="assets/libs/select2/select2.min.js.pagespeed.jm.d4r48tAaYG.js"></script>
<!--===============================================================================================-->
<script src="assets/libs/animsition/animsition.min.js.pagespeed.jm.nxa1JJAYyr.js"></script>
<!--===============================================================================================-->
<script src="assets/libs/daterangepicker/moment.min.js.pagespeed.ce.iNwJ-pilfw.js"></script>
<script src="assets/libs/daterangepicker/daterangepicker.js.pagespeed.jm.DjaKO8iUpy.js"></script>
<!--===============================================================================================-->
<script>//<![CDATA[
(function($){"use strict";$.fn.extend({parallax100:function(options){var defaults={speedScroll:3}
var options=$.extend(defaults,options);return this.each(function(){var obj=$(this);var bgParallax=$(obj);var posWindow=$(window).scrollTop();var hWindow=$(window).height();var posParallax=$(obj).offset().top;var hParallax=$(obj).outerHeight();var x=0;var y=options.speedScroll;var setPosParallax=function(){if($(window).width()>992){x=$(obj).offset().top-$(window).scrollTop();$(bgParallax).css('background-position','center '+(x/y)+'px');}else{$(bgParallax).css('background-position','center','0');}}
setPosParallax();$(window).on('resize',function(){setPosParallax();});$(window).on('scroll',function(){setPosParallax();});});}});})(jQuery);
//]]></script>
<!--===============================================================================================-->
<script src="assets/js/main.js.pagespeed.jm.b5l5C-r0Bo.js"></script>


</body>
</html>