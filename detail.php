<?

$useragent=$_SERVER['HTTP_USER_AGENT'];
$mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="keywords" content=''>
	<meta name="description" content=''>

	<meta name="viewport" content="width=1000, user-scalable=no">

	<? if( $mobile ): ?>
	<meta name="viewport" content="width=750, user-scalable=no">
	<? endif; ?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css/slick.css" type="text/css">
	<link rel="stylesheet" href="css/KitAnimate.css" type="text/css">
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/meta.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
	<script type="text/javascript" src="js/jssor.slider.js"></script>
	<script type="text/javascript" src="js/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/swipe.js"></script>
	<script type="text/javascript" src="js/carousel.lite.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/KitProgress.js"></script>
	<script type="text/javascript" src="js/KitAnimate.js"></script>
	<script type="text/javascript" src="js/device.js"></script>
	<script type="text/javascript" src="js/KitSend.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body>
	<!-- <ul class="ps-lines">
		<li class="v" style="margin-left:-481px"></li>
		<li class="v" style="margin-left:480px"></li>
		<li class="v" ></li>
	</ul> -->
	<div class="b-header main">
			<div class="b-block other clearfix">
				<div class="b-logo left">
					<a href="#"><img src="i/logo.png"></a>
				</div>
				<div class="b-menu right clearfix">
					<ul class="left clearfix">
						<li><a href="#">about us</a></li>
						<li><a href="#">downloads</a></li>
						<li><a href="#">documentation</a></li>
						<li><a href="#">support</a></li>
					</ul>
					<a href="#" class="right b-white-butt">Buy it now</a>
				</div>
				
			</div>
		</div>
		<div class="b-header scroll-menu default">
			<div class="b-block clearfix">
				<div class="left mobile-cont clearfix">
					<div class="b-logo left">
						<a href="#"><img src="i/logo.png"></a>
					</div>
					<a href="#" class="menu-mobile open hide right"></a>
					<a href="#" class="menu-mobile close hide right"></a>
				</div>
				
				<div class="b-menu right clearfix">
					<ul class="left clearfix">
						<li><a href="#">about us</a></li>
						<li><a href="#">downloads</a></li>
						<li><a href="#">documentation</a></li>
						<li><a href="#">support</a></li>
					</ul>
					<a href="#" class="right b-white-butt">Buy it now</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b-content">
		<div class="b-block">
			<div class="b-item clearfix"> 
				<div class="images left">
					<div id="bg-img" style="background-image:url('i/item-bg.jpg');">
						<a class="fancy-img-big" href="i/item-bg.jpg"></a>
					</div>
					<ul>
						<li style="background-image:url('i/item-bg.jpg');">
							<a class="fancy-img-thumb" href="i/item-bg.jpg"></a>
							<a href="i/item-bg.jpg" class="fancy-img" rel="one"></a>
						</li>
						<li style="background-image:url('i/item-sm.jpg');">
							<a class="fancy-img-thumb" href="i/item-sm.jpg"></a>
							<a href="i/item-sm.jpg" class="fancy-img" rel="one"></a>
						</li>
						<li style="background-image:url('i/prismatic-c.png');">
							<a class="fancy-img-thumb" href="i/prismatic-c.png"></a>
							<a href="i/prismatic-c.png" class="fancy-img"  rel="one"></a>
						</li>
					</ul>
				</div>
				<div class="inform right">
					<form id="buy" action="#">
					<div class="params">
						<h2 class="title">Lightpack</h2>
						<h3 class="subtitle">Free worldwide delivery and 20USD off for a limited period of time</h3>
						<h4 class="topic">Please select your display size:</h4>
						<p class="desc">We recommend you to use multiple Lightpacks in case your TV is bigger than 52 inches.</p>
						<ul id="disp-sel">
							<li>
								<label for="display-1">
									<div class="tv">
										<div class="first">
											<div class="rect">
												<h6>Up to</h6><span>50</span>
											</div>
											<div class="line"></div>
										</div>
									</div>
									<h5>up to 50 inches</h5>
								</label>
								<input id="display-1" type="radio" name="display" value="up to 50">
							</li>
							<li>
								<label for="display-2">
									<div class="tv">
										<div class="second">
											<div class="rect">
												<span>50-65</span>
											</div>
											<div class="line"></div>
										</div>
									</div>
									<h5>50-65 inches</h5>
								</label>
								<input id="display-2" type="radio" name="display" value="50-65">									
							</li>
							<li class="active">
								<label for="display-3">
									<div class="tv">
										<div class="third">
											<div class="rect">
												<span>65-86</span>
											</div>
											<div class="line"></div>
										</div>
									</div>
									<h5>65-86 inches</h5>
								</label>
								<input id="display-3" type="radio" name="display" value="65-86" checked>
							</li>
						</ul>
					</div>	
					<div class="price clearfix">
						<div class="left">
							<label for="quantity">Quantity:</label>
							<div class="b quantity">
								<input id="quantity" type="text" value="3" maxlength="3">
								<span class="arrow up-arrow" onselectstart="return false;"></span>
								<span class="arrow down-arrow" onselectstart="return false;"></span>
							</div>
						</div>
						<div class="left">
							<h5>$109.00</h5>
							<h3>$89.00</h3>
						</div>
						<div class="right">
							<a href="#" class="b-blue-butt" onclick='$("#buy").submit(); return false;'>buy it now</a>
						</div>
					</div>
					</form>
					<div class="item-desc">
						<p class="desc">Shipping out from Los Angeles and Hong Kong next day</p>
						<p class="desc">Typical delivery time is 10 business days, but due to customs routines the maximum delivery time can be as long as 6 weeks. We guarantee that Lightpack is delivered in 30 business days.</p>
						<p class="desc">For US and Canada based customers: typical delivery time is 4 business days and maximum delivery time is 10 business days.</p>
						<p class="desc">Customs/export fees may vary and are not included into the shipping price.</p>
						<h4 class="topic">Box content:</h4>
						<ul>
							<li class="desc">Lightpack main unit</li>
							<li class="desc">10 LED-modules with 70 cm cable length</li>
							<li class="desc">Micro USB cable</li>
							<li class="desc">AC adaptor with interchangeable plug for US, EU and UK socket (AU customers will require a converter)</li>
							<li class="desc">Mount accessories</li>
							<li class="desc">Quick Install Guide and Warranty term sheet</li>
						</ul>
						<div class="item-links">
							<p class="desc">Lightpack requires a connection to computer or Android device with Prismatik software installed. Prismatik can be obtained at <a class="link" href="#">http://lightpack.tv/downloads</a></p>
							<p class="desc">Prismatik is compatible with Windows, Mac OS X, Linux, Android, and works with many Android-based media centers. See <a class="link" href="#">FAQ</a> for details and software limitations.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="b-sub sub-2 hide">
		<div class="b-block clearfix">
			<div>
				<input type="text" placeholder="Enter your email address">
				<a href="#" class="b-white-butt">subscribe</a>
			</div>
		</div>
	</div>
	<div class="b-footer">
		<div class="b-block">
			<div>
				<ul class="bot-menu">
					<li><a href="#">NEWS</a></li>
					<li><a href="#">ABOUT US</a></li>
					<li><a href="#">PRIVACY POLICY</a></li>
					<li><a href="#">TERMS OF SERVICE</a></li>
					<li><a href="#">SUPPORT</a></li>
				</ul>
			</div>
			<ul class="social">
				<li><a href="#" class="fb"></a></li>
				<li><a href="#" class="tw"></a></li>
				<li><a href="#" class="gp"></a></li>
				<li><a href="#" class="yt"></a></li>
			</ul>
			<h5>Copyright © 2015 Lightpack</h5>
		</div>
	</div>

	<div style="display:none;">
		<div id="b-popup-1">
			<div class="for_all b-popup" >
				<h3>Оставьте заявку</h3>
				<h4>и наши специалисты<br>свяжутся с Вами в ближайшее время</h4>
				<form action="kitsend.php" method="POST" id="b-form-1" data-block="#b-popup-1">
					<div class="b-popup-form">
						<label for="name">Введите Ваше имя</label>
						<input type="text" id="name" name="name" required/>
						<label for="tel">Введите Ваш номер телефона</label>
						<input type="text" id="tel" name="phone" required/>
						<input type="hidden" name="subject" value="Заказ"/>
						<input type="submit" class="ajax b-orange-butt" value="Заказать">
					</div>
				</form>
			</div>
		</div>
		<div id="b-popup-2">
			<div class="b-thanks b-popup">
				<h3>Спасибо!</h3>
				<h4>Ваша заявка успешно отправлена.<br/>Наш менеджер свяжется с Вами в течение часа.</h4>
				<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
		<div id="b-popup-error">
			<div class="b-thanks b-popup">
				<h3>Ошибка отправки!</h3>
				<h4>Приносим свои извинения. Пожалуйста, попробуйте отправить Вашу заявку позже.</h4>
				<input type="submit" class="b-orange-butt" onclick="$.fancybox.close(); return false;" value="Закрыть">
			</div>
		</div>
	</div>
</body>
</html>