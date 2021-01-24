<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Official Website Beacukai Medan</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <!-- Date Picker -->
	    <link rel="stylesheet" href="admin/plugins/datepicker/datepicker3.css">
	</head>
	<body>
		<div id="wrapper1">
			<div id="wrapper" class="container-fluid">
				<!-- HEADER & MENU -->
				<?php
					include 'include/head_menu.php';
				?>
			</div>
			<div id="wrapper-content" class="container">
				<div class="row">
					<div id="content" class="col-md-12">
					<!-- CONTENT -->
					<?php
						error_reporting(0);
						$page = $_GET['p'];
						if (!isset($page)) {
							include 'include/content.php';
						} else {
							include 'include/'.$page;
						}
					?>
					</div>
				</div>
				<hr>
			</div>
			<div id="wrapper-conbotom" class="container-fluid">
				<!-- CONTENT BOTTOM -->
				<!-- <?php
					include 'include/cont_bottom.php';
				?> -->
			</div>
			<!-- FOOTER -->
			<?php
				include 'include/footer.php';
			?>
		</div>
		<div id="scrolltop">
			<a class="glyphicon glyphicon-chevron-up" title="Back To Top"></a>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/npm.js"></script>
		<!-- datepicker -->
		<script src="admin/plugins/datepicker/bootstrap-datepicker.js"></script>
		<!-- #region Jssor Slider Begin -->
		<script src="js/jssor.slider-24.1.5.min.js" type="text/javascript"></script>
		<script type="text/javascript">
				jssor_1_slider_init = function() {

						var jssor_1_SlideshowTransitions = [
							{$Duration:1200,$Opacity:2}
						];

						var jssor_1_options = {
							$AutoPlay: 1,
							$SlideshowOptions: {
								$Class: $JssorSlideshowRunner$,
								$Transitions: jssor_1_SlideshowTransitions,
								$TransitionsOrder: 1
							},
							$ArrowNavigatorOptions: {
								$Class: $JssorArrowNavigator$
							},
							$BulletNavigatorOptions: {
								$Class: $JssorBulletNavigator$
							}
						};

						var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

						/*responsive code begin*/
						/*remove responsive code if you don't want the slider scales while window resizing*/
						function ScaleSlider() {
								var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
								if (refSize) {
										refSize = Math.min(refSize, );
										jssor_1_slider.$ScaleWidth(refSize);
								}
								else {
										window.setTimeout(ScaleSlider, 30);
								}
						}
						ScaleSlider();
						$Jssor$.$AddEvent(window, "load", ScaleSlider);
						$Jssor$.$AddEvent(window, "resize", ScaleSlider);
						$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
						/*responsive code end*/
				};
		</script>
		<script type="text/javascript">
			$(function(){
				//Initialize datepicker Elements
				$(".datepicker").datepicker({
					"autoclose":true,
					"todayHighlight":true,
					"format": 'yyyy-mm-dd',
				});

				// SHOW PASSWORD
				$('#cek').click(function(){
					if($(this).is(':checked')) {
						$('#pw1').attr('type','text');
						$('#pw2').attr('type','text');
					} else {
						$('#pw1').attr('type','password');
						$('#pw2').attr('type','password');
					}
				});

				// VALIDASI FORM USER
				$(".validasi").on('blur',function(){
					var validasi = $(".validasi").val();
					$.ajax({
						type : 'POST',
						data : 'validasi=' + validasi,
						url  : "include/registrasi/validasi.php",
						success: function(result) {
							$("#valid").html(result);
						}
					});
				});

				// VALIDASI FORM NAMA PERUSAHAAN
				$(".validasi1").on('blur',function(){
					var validasi1 = $(".validasi1").val();
					$.ajax({
						type : 'POST',
						data : 'validasi1=' + validasi1,
						url  : "include/registrasi/validasi.php",
						success: function(result1) {
							$("#valid1").html(result1);
						}
					});
				});

				// VALIDASI FORM NAMA PERUSAHAAN
				$(".validasi2").on('blur',function(){
					var validasi2 = $(".validasi2").val();
					$.ajax({
						type : 'POST',
						data : 'validasi2=' + validasi2,
						url  : "include/registrasi/validasi.php",
						success: function(result2) {
							$("#valid2").html(result2);
						}
					});
				});

				// SCROLLTOP
				$('#scrolltop').hide();
				$(window).scroll(function(){
					if ($(window).scrollTop() > 100) {
						$('#scrolltop').fadeIn();
					} else {
						$('#scrolltop').fadeOut();
					}
				});
				$('#scrolltop').click(function () {
					$('html, body').animate({scrollTop : 0},1000);
				});

				// HEADER STYCKY
				$(window).scroll(function(){
					if ($(window).scrollTop() >= 100) {
						$('#wrapper').addClass('fixed-header');
					}
					else {
						$('#wrapper').removeClass('fixed-header');
					}
				});

			});

			// VALIDASI PASSWORD
			function cekPass () {
				var pw1 = $("#pw1").val();
				var pw2 = $("#pw2").val();
				if (pw1==pw2) {
					//alert("Password Benar");
					document.getElementById('konfir').innerHTML = "Password Benar";
				} else {
					document.getElementById('konfir').innerHTML = "Password Salah";
					//alert("Password Salah");
				}
			}
		</script>
		<script type="text/javascript">jssor_1_slider_init();</script>
	</body>
</html>