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

	<meta name="viewport" content="width=1000; user-scalable=no;">

	<? if( $mobile ): ?>
	<meta name="viewport" content="width=750; user-scalable=no;">
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
					<a href="#" class="right b-white-butt butt">Buy it now</a>
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
					<a href="#" class="right b-white-butt butt">Buy it now</a>
				</div>
			</div>
		</div>
	</div>
	<div class="b-content">
		<div class="b-block">
			<div class="b-about clearfix"> 
				<div class="about-project">
					<h2 class="title">Lightpack project</h2>
					<p class="desc">Since 2011 the project was developed by a small team of enthusiasts without any company and funding, investing their own money and till now we believe in it and continue working on it. During 2012 we’ve created tons of prototypes with different functionality and level of readiness. In 2012 Russian users could already buy a fully functioning version of Lightpack which however was not yet ready for mass-market. We run Kickstarter campaign in May 2013 to croudfound device mass-production start. Despite extremely ambitious target goal of $261,962 we overfund it till 191% and finish Lightpack <a class="link" href="#">Kickstarter campaign</a> with $500,784.</p>
					<p class="desc">We’ve already sold over 1 000 batch-production optimized devices in Russia. Over 4 000 were assembled by the users themselves (as all firmware layouts and software source codes were open). In early 2013 we finalized the design of the device and start mass production at the end of the year which would also include product support, certification and etc.</p>
				</div>
				<div class="about-who">
					<h2 class="title">Who we are</h2>
					<p class="desc">Woodenshark is a small engineering team building small gadgets & online services scattered across the globe from New York to Shenzhen. We believe that distance is not an obstacle for any kind of relationship, and collaborative work. Results-focus philosophy and various Internet-based tools help us stay in touch and keep our product developing processes going. You can find more about our team and projects on <a class="link" href="#">woodenshark.com</a> .</p>
				</div>
				<ul>
					<li class="clearfix">
						<img class="left" src="i/face-1.jpg">
						<div class="right">
							<h3 class="subtitle">Mit Gorilovsky</h3>
							<p class="desc">Product & solutions innovator with experience in mobile telecoms industry (Yota, Megafon, Create Studios) and econophysics services with current focus on enabling complex finance technologies with smile human interfaces.</p>
							<p class="desc">Mit holds a Magister’s degree in IT, Physics, Mathematics from St. Petersburg National Research University of Information Technologies, Mechanics and Optics.</p>
						</div>
					</li>
					<li class="clearfix">
						<img class="left" src="i/face-2.jpg">
						<div class="right">
							<h3 class="subtitle">Olga Perova</h3>
							<p class="desc">An experienced executive with more than 6 years in operations, M&A, business and strategy development with Russian leading internet companies (Yandex, Boutique.ru, SUP) and previously in Severstal (Russian steel producer).</p>
							<p class="desc">She also has a strong financial background acting as CFO at Cafemax and hasa Magister's degree in Finance of Plekhanov Russian University of Economics.</p>
						</div>
					</li>
					<li class="clearfix">
						<img class="left" src="i/face-3.jpg">
						<div class="right">
							<h3 class="subtitle">Mike Sannikov</h3>
							<p class="desc">Mike is a product designer who has developed the Russian open-hardware projects such as Pixelkit, Glitchy-sequencer, and Lo-res pixelator. Mike is an author of the Lightpack who focused on OSHW. He has strong engineering skills, product vision and he knows how to make things looks nice and easy. He started the Lightpack project in 2011 and has been working on it up to now.</p>
							<p class="desc">Mike holds a degree Automatic information systems in Kalashnikov ISTU of Izhevsk.</p>
						</div>
					</li>
					<li class="clearfix">
						<img class="left" src="i/face-1.jpg">
						<div class="right">
							<h3 class="subtitle">Timur Sattarov</h3>
							<p class="desc">Software engineer with more than 4 years of experience in Java and nearly 3 years of experience in C++, open-source enthusiast. Despite of a light obsession of IT, Timur interesting in natural science as well.</p>
						</div>
					</li>
					<li class="clearfix">
						<img class="left" src="i/face-4.jpg">
						<div class="right">
							<h3 class="subtitle">Dmitry Tsoy</h3>
							<p class="desc">An experienced supply chain manager and logistics at YotaPhone, ArtLebedev, Meridian Telecom and Sportmaster.</p>
						</div>
					</li>

				</ul>
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