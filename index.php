<?php
ob_start();
session_start();
//$_SESSION['username'] = '';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url"           content="https://www.virtualeventthailand.com/predator-pcs/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Predator - PUBG Continental Series-APAC Charity Showdown" />
    <meta property="og:description"   content="พรีเดเตอร์ รวมพลคนอีสปอร์ตทำดี สู้โควิด-19 ในศึก PUBG Continental Series – APAC Charity Showdown  เงินรางวัลรวมกว่า 6 ล้านบาท พร้อมประเดิมประสบการณ์เวอร์ชวลอีเวนท์ครั้งแรกในโลกอีสปอร์ต" />
    <meta property="og:image"         content="" />
	<title>PUBG</title>
	<meta name="description" content="PUBG" />
	<meta name="keywords" content="PUBG" />
	<meta name="author" content="Nu Chaimongkon" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="fonts/icomoon/icomoon.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/animations.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mdb.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="js/modernizr-custom.js"></script>

</head>

<body>
	<p class="landscap-txt"><span>รับชมในแนวนอน</span> <br>(Watch in landscape)</p>
	<div class="contain-slideshow">
		<div class="for-absolute information_slideshow">
			<!--Information-->
			<div class="relative">
				<img src="./img/information/information_center.jpg" class="img-full-bg" />
				<a data-toggle="modal" data-target="#information_modal">
					<img src="./img/information/Information_icon.png"
						class="img-information-center" />
				</a>
				<a onclick=open_frontlive();>
					<img src="./img/information/Live-Icon.png" class="animated flipInY infinite img-live-icon-center">
				</a>
				<div class="tab-navigation tab-navigation-left">
					<a onclick="informationToShop();" class="btn-nav btn-nav-left">
						<div class="box-arrow">
						</div>
						<p>PREDATOR SHOP</p>
					</a>
				</div>
				<div class="tab-navigation tab-navigation-right">
					<a onclick="informationToVideo();" class="btn-nav btn-nav-right">
						<div class="box-arrow">
						</div>
						<p>MEDIA</p>
					</a>
				</div>
			</div>
		</div>
		<div class="for-absolute front_live_slideshow">
			<!--Front Live-->
			<div class="relative">
				<img src="./img/frontlive/front_live.jpg" class="img-full-bg" />
				<a onclick="openYoutube(9);">
					<img src="./img/information/Live-Icon.png" class="animated jello infinite img-live-icon-frontlive">
				</a>
				<div class="tab-navigation tab-navigation-bottom">
					<a onclick="front_liveToInformation();" class="btn-nav btn-nav-bottom">
						<p>INFORMATION</p>
						<div class="box-arrow">

						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="for-absolute shop_slideshow">
			<div class="relative">
				<img src="./img/shop/information_left.jpg" class="img-full-bg" />
				<a data-toggle="modal" data-target="#information_modal">
					<img src="./img/information/Information_icon.png"
						class="img-information-left" />
				</a>
				<a onclick=open_frontliveformleft();>
					<img src="./img/information/Live-Icon.png" class="animated flipInY infinite img-live-icon-left">
				</a>
				<a onclick=open_shopZoom();>
					<img src="./img/circle2.png" class="animated zoomIn infinite img-mouseshop-icon-left">
				</a>
				<div class="tab-navigation tab-navigation-right">
					<a onclick="shopToInformation();" class="btn-nav btn-nav-right">
						<div class="box-arrow">
						</div>
						<p>INFORMATION</p>
					</a>
				</div>
			</div>
		</div>
		<div class="for-absolte shop_predator">
			<div class="relative">
				<img src="./img/shop/shop_predator.jpg" class="img-full-bg" />
				<a onclick="product_left();">
					<img src="./img/product/i.png"
						class="img-notebook-left">
				</a>
				<a onclick="product_center();">
					<img src="./img/product/i.png"
						class="img-notebook-center">
				</a>
				<a onclick="product_right();">
					<img src="./img/product/i.png"
						class="img-notebook-right">
				</a>
				<div class="tab-navigation tab-navigation-right">
					<a onclick="predatorToInformation();" class="btn-nav btn-nav-right">
						<div class="box-arrow">
						</div>
						<p>INFORMATION</p>
					</a>
				</div>
			</div>
		</div>
		<div class="for-absolute tvscreen_slideshow">
			<div class="relative">
				<img src="./img/tvscreen/information_right.jpg" class="img-full-bg" />
				<a data-toggle="modal" data-target="#information_modal">
					<img src="./img/information/Information_icon.png"
						class="img-information-right" />
				</a>
				<a onclick=open_frontliveformright();>
					<img src="./img/information/Live-Icon.png" class="animated flipInY infinite img-live-icon-right">
				</a>
				<a onclick=open_mediaZoom();>
					<img src="./img/circle2.png" class="animated zoomIn infinite img-mouseshop-icon-right">
				</a>
				<div class="tab-navigation tab-navigation-left">
					<a onclick="tvscreenToInformation();" class="btn-nav btn-nav-left">
						<div class="box-arrow">
						</div>
						<p>INFORMATION</p>
					</a>
				</div>
			</div>
		</div>
		<div class="for-absolute media_show">
			<div class="relative">
				<img src="./img/tvscreen/TV_2.jpg" class="img-full-bg" />
				<a onclick="openYoutube(1);">
					<img src="./img/tvscreen/link1.png" class="img-youtube-link-1">
				</a>
				<a onclick="openYoutube(2);">
					<img src="./img/tvscreen/link2.png" class="img-youtube-link-2">
				</a>
				<a onclick="openYoutube(3);">
					<img src="./img/tvscreen/link3.png" class="img-youtube-link-3">
				</a>
				<a onclick="openYoutube(4);">
					<img src="./img/tvscreen/link4.png" class="img-youtube-link-4">
				</a>
				<div class="tab-navigation tab-navigation-left">
					<a onclick="mediaToInformation();" class="btn-nav btn-nav-left">
						<div class="box-arrow">
						</div>
						<p>INFORMATION</p>
					</a>
				</div>
			</div>
		</div>
		<div class="for-absolute product_left">
			<div class="relative">
				<img src="./img/product/titon300_left.jpg" class="img-full-bg" />
								
				<div class="modal-titon300">
					<div class="relative">
						<a href="https://www.acer.com/ac/en/ID/content/predator-series/predatortriton300" target="_blank">
							<img src="./img/product/modal_triton300.png" class="modal-product">
						</a>
						<a onclick="closetiton300();">
							<div class="box-triton300-close">
								<img src="./img/product/close.png">
							</div>
						</a>
						<a href="https://predatorthailand.com/all-model/" target="_blank">
							<div class="box-triton300-buy">
								<img src="./img/product/buy_btn.png">
							</div>
						</a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="for-absolute product_center">
			<div class="relative">
				<img src="./img/product/titon500_center.jpg" class="img-full-bg" />				
				<div class="modal-titon500">
					<div class="relative">
						<a href="https://predatorthailand.com/predator-triton-500/" target="_blank">
							<img src="./img/product/modal_triton500.png" class="modal-product">
						</a>
						<a onclick="closetiton500();">
							<div class="box-triton500-close">
								<img src="./img/product/close.png">
							</div>
						</a>
						<a href="https://predatorthailand.com/all-model/" target="_blank">
							<div class="box-triton500-buy">
								<img src="./img/product/buy_btn.png">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="for-absolute product_right">
			<div class="relative">
				<img src="./img/product/heiios300_right.jpg" class="img-full-bg" />
				
				<div class="modal-heiios300">
					<div class="relative">
						<a href="https://predatorthailand.com/helios-300/" target="_blank">
							<img src="./img/product/modal_triton500.png" class="modal-product">
						</a>
						<a onclick="closeheiios300();">
							<div class="box-heiios300-close">
								<img src="./img/product/close.png">
							</div>
						</a>
						<a href="https://predatorthailand.com/all-model/#filter=.g-helios-300" target="_blank">
							<div class="box-heiios300-buy">
								<img src="./img/product/buy_btn.png">
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<audio controls autoplay loop class="sound-player">
		<source src="./sound.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
	<div class="modal fade" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog full-screen" role="document">
			<div class="modal-content">
				<div class="box-register">
					<p class="title-register">INFORMATION</p>
					<ul class="ul-list-infomation">
						<li>
							<a data-fancybox="agenda" href="./img/information/agenda.png">PUBG LIVE AGENDA</a>
						</li>
						<li>
							<a onclick="informationToShopModal();" href="#">PREDATOR SHOP</a>
						</li>
						<li>
							<a href="https://liquipedia.net/pubg/PUBG_Continental_Series/2020/Charity_Showdown/Asia_Pacific"
								target="_blank">16 TEAMS PRESENTATION</a>
						</li>
						<li>
							<a href="https://predatorthailand.com/" target="_blank">CONTACT US</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<a href="logout.php">
		<img src="./img/outlout_icon.png" class="img-logout-icon">
	</a>
	<div class="modal fade" id="open_live_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog full-screen" role="document">
			<div class="modal-content">
				<div class="box-register">
					<p class="title-register">Waiting Link Live</p>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_youtube" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog full-screen modal-dialog-youtube" role="document">
			<div class="modal-content">
				<div id="box-youtube-modal" class="box-youtube w-100">

				</div>
			</div>
		</div>
	</div>
	<input type="hidden" class="username" value="<?php if (isset($_SESSION['username'])) {
                                                        echo $_SESSION['username'];
													  } ?>" />
	<input type="hidden" class="userid" value="<?php if (isset($_SESSION['userid'])) {
                                                        echo $_SESSION['userid'];
                                                      } ?>" />
	<script>		
		var getSession = $(".username").val();		
		if(getSession != "canAccess"){
			window.location.href = "login.php";
		}
	</script>
	<script>
		$('#information_modal').on('hidden.bs.modal', function (e) {

		})
		$('#open_live_modal').on('hidden.bs.modal', function (e) {
		})

		$('.shop_predator').hide();
		$('.media_show').hide();
		$('.product_left').hide();
		$('.product_center').hide();
		$('.product_right').hide();
		function open_frontlive() {
			$('.information_slideshow').addClass('hide_zoom');
			$('.front_live_slideshow').addClass('open_zoomin');
		}
		function open_frontliveformleft() {
			$('.shop_slideshow').removeClass('slide_center');
			$('.information_slideshow').removeClass('slide_right');
			$('.information_slideshow').addClass('hide_zoom');
			$('.front_live_slideshow').addClass('open_zoomin');
		}
		function open_frontliveformright() {
			$('.tvscreen_slideshow').removeClass('slide_center');
			$('.information_slideshow').removeClass('slide_left');
			$('.information_slideshow').addClass('hide_zoom');
			$('.front_live_slideshow').addClass('open_zoomin');
		}
		function front_liveToInformation() {
			$('.front_live_slideshow').removeClass('open_zoomin');
			$('.information_slideshow').removeClass('hide_zoom');
		}
		function informationToShop() {
			$('.information_slideshow').addClass('slide_right');
			$('.shop_slideshow').addClass('slide_center');
		}
		function shopToInformation() {
			$('.shop_slideshow').removeClass('slide_center');
			$('.information_slideshow').removeClass('slide_right');
		}
		function informationToVideo() {
			$('.information_slideshow').addClass('slide_left');
			$('.tvscreen_slideshow').addClass('slide_center');
		}
		function tvscreenToInformation() {
			$('.tvscreen_slideshow').removeClass('slide_center');
			$('.information_slideshow').removeClass('slide_left');
		}
		function informationToShopModal() {
			$('#information_modal').modal('hide');
			$('.information_slideshow').addClass('slide_right');
			$('.shop_slideshow').addClass('slide_center');
		}
		function open_shopZoom() {
			$('.shop_slideshow').hide(500);
			$('.shop_predator').fadeIn(500);
		}
		function predatorToInformation() {
			$('.shop_predator').hide();
			$('.shop_slideshow').fadeIn(500);
		}
		function open_mediaZoom() {
			$('.tvscreen_slideshow').hide(500);
			$('.media_show').fadeIn(500);
		}
		function mediaToInformation() {
			$('.media_show').hide();
			$('.tvscreen_slideshow').fadeIn(500);
		}
		function openYoutube(data) {
			var live_link = "https://www.youtube.com/embed/nsCAbCmTNUY";
			var link_1 = "https://www.youtube.com/embed/nsCAbCmTNUY";
			var link_2 = "https://www.youtube.com/embed/Hsr6qxpmfJw";
			var link_3 = "https://www.youtube.com/embed/tw3CzQzUwgk";
			var link_4 = "https://www.youtube.com/embed/5EMLVw7iMyM";
			// //alert(data);
			if (data == 9) {
				$('#box-youtube-modal').html(`<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="`+ live_link + `"
							allowfullscreen></iframe>
					</div>`);
			} else if (data == 1) {
				$('#box-youtube-modal').html(`<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="`+ link_1 + `"
							allowfullscreen></iframe>
					</div>`);
			} else if (data == 2) {
				$('#box-youtube-modal').html(`<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="`+ link_2 + `"
							allowfullscreen></iframe>
					</div>`);
			} else if (data == 3) {
				$('#box-youtube-modal').html(`<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="`+ link_3 + `"
							allowfullscreen></iframe>
					</div>`);
			} else if (data == 4) {
				$('#box-youtube-modal').html(`<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="`+ link_4 + `"
							allowfullscreen></iframe>
					</div>`);
			}

			$('#modal_youtube').modal('show')
		}
		$('#modal_youtube').on('hidden.bs.modal', function (e) {
			$('#box-youtube-modal').empty();
		})
		function product_left() {
			$('.product_left').fadeIn(500);
			$('.shop_predator').hide();
		}
		function closetiton300() {
			$('.shop_predator').fadeIn(500);
			$('.product_left').hide();
		}
		function product_center() {
			$('.product_center').fadeIn(500);
			$('.shop_predator').hide();
		}
		function closetiton500() {
			$('.shop_predator').fadeIn(500);
			$('.product_center').hide();
		}
		function product_right() {
			$('.product_right').fadeIn(500);
			$('.shop_predator').hide();
		}
		function closeheiios300() {
			$('.shop_predator').fadeIn(500);
			$('.product_right').hide();
		}
	</script>
	<script>
		function view(){
			var valuserid = $('.userid').val();
			if(valuserid != ''){
				$.ajax({
				  url: 'view.php',
				  method: 'POST',
				  data: {
				    valuserid: valuserid,
				  },
				  success: function (data) {
				      if (data == 'success') {                    
						//alert('add view')
				      }                  
				      else if (data == 'error') {
						//alert('error')
				      }
				      else {
						//alert('error')
				      }
				  }
				})
			}			
		}
		view();
	</script>
</body>

</html>