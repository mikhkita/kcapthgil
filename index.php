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
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
</head>
<body>
	<div class="b b-main">
		<div class="b-header main">
			<div class="b-block main clearfix">
				<div class="b-logo left">
					<a href="index.php"><img src="i/logo.png"></a>
				</div>
				<div class="b-menu right clearfix">
					<ul class="left clearfix">
						<li><a href="about.php">about us</a></li>
						<li><a href="downloads.php">downloads</a></li>
						<li><a href="faq.php">documentation</a></li>
						<li><a href="#" class="fancy" data-block="#support">support</a></li>
					</ul>
					<a href="#" class="fancy right b-white-butt butt" data-block="#buy-it-now">Buy it now</a>
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
						<li><a href="about.php">about us</a></li>
						<li><a href="downloads.php">downloads</a></li>
						<li><a href="faq.php">documentation</a></li>
						<li><a href="#" class="fancy" data-block="#support">support</a></li>
					</ul>
					<a href="#" class="fancy right b-white-butt butt" data-block="#buy-it-now">Buy it now</a>
				</div>
			</div>
		</div>
		<div class="b-block main-content">
			<h1>Get a new level of experience while protecting your eyes</h1>
			<div class="play">
				<a href="https://www.youtube.com/embed/RgKAFK5djSk?autoplay=1" class="fancy-img fancybox.iframe"><span></span></a>
			</div>	
		</div>
		<div class="more">
			<a href="#" class="b-go" data-block=".b-difference" data-offset="75">Learn more</a>
		</div>
	</div>
	<div class="b-sub">
		<div class="b-block clearfix">
			<div>
				<form action="" id="subscribe">
					<input type="text" name="email" placeholder="Enter your email address" data-block="#b-popup-2" required>
					<a href="#" class="ajax b-white-butt butt" onclick="$('#subscribe').submit(); return false;">subscribe</a>
				</form>
			</div>
		</div>
	</div>
	<div class="b b-difference">
		<div class="b-block">
			<h2 class="title">Protect your eyes and upgrade it with Lightpack</h2>	
			<div class="mobile">
				<h3>Reduce the difference in lighting between dark and bright scenes</h3>
				<p>It takes about 5 sec for an eye pupil to narrow to react to bright light, and up to 5 mins to increase the size of a pupil when scene gets dark back. Every movie switches from dark to bright scenes a large number of times. The muscles of an eye are in constant tension which can lead to vision problems. Lightpack can compensate rapid fluctuations of the room light.</p>
				<div class="clearfix b-eyes">
					<div class="left eye eye-1"></div>
					<div class="left line"></div>
					<h4 class="left">5 sec.</h4>
					<div class="left line"></div>
					<div class="right eye"></div>
				</div>
			</div>
			<div class="b-slider">
				<div class="slide">
					<h3>Reduce the difference in lighting between dark and bright scenes</h3>
					<p>It takes about 5 sec for an eye pupil to narrow to react to bright light, and up to 5 mins to increase the size of a pupil when scene gets dark back. Every movie switches from dark to bright scenes a large number of times. The muscles of an eye are in constant tension which can lead to vision problems. Lightpack can compensate rapid fluctuations of the room light.</p>
					<div class="slide-main">
						<div class="clearfix b-eyes">
							<div class="left eye eye-1"></div>
							<div class="left line"></div>
							<h4 class="left" id="eye-text">5 sec.</h4>
							<div class="left line"></div>
							<div class="right eye"></div>
						</div>
						<div class="clearfix displays-cont">
							<div class="left">
								<span class="back"></span>
								<span class="front"></span>
							</div>	
							<div class="right">
								<span class="back"></span>
								<span class="front"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="slide">
					<h3>Utilize eye-focus specifity</h3>
					<p>Your eye anatomy can't focus on the whole field of view. So your eye percepts your display like picture on right. Most of field of vision is unfocused and you percept solid picture only thanks to brain capabilities. That's why Lightpack can "expand" your screen.</p>
					<div class="slide-main">
						<div class="clearfix b-eyes">
							<div class="left line"></div>
							<h4 class="left">You see your display as 42</h4>
							<div class="left line"></div>
						</div>
						<div class="displays-cont">
							<div class="bg">
								<span class="back"></span>
								<span class="front"></span>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="switch">
				<h3>SWITCH TO TURN LIGHTPACK ON</h3>
				<div class="tumb"><span></span></div>
			</div>
		</div>
	</div>
	<div class="b b-fact">
		<div class="b-block">
			<p>Lightpack is a content-driven intellectual lighting system for your living room environment. It is designed for your displays (TV or PC monitor) and works perfectly with your PC or MAC.</p>
			<a class="b-white-butt butt fancy" data-block="#buy-it-now" href="#">buy it now</a>
		</div>
	</div>
	<div class="b b-features">
		<div class="b-block">
			<h2 class="title">Lightpack features you want to know</h2>
			<ul class="clearfix">
				<li>
					<div>
						<img src="i/feature-1.jpg">
						<h4>Totally Open Source</h4>
						<p>We’ve published all PCB layouts and BOM and all software and firmware source codes under the&nbsp;GPL license</p>
					</div>
				</li>
				<li>
					<div>
						<img src="i/feature-2.jpg">
						<h4>Built for the real needs</h4>
						<p>We are doing our best to make our&nbsp;device, and our software as well, meet the requirements of the&nbsp;real&nbsp;world</p>
					</div>
				</li>
				<li>
					<div>
						<img src="i/feature-3.jpg">
						<h4>Up to 5 Lightpacks teamwork</h4>
						<p>For those of you who own huge TVs we provided the possibility of several Lightpacks simultaneous work just one</p>
					</div>
				</li>
				<li>
					<div>
						<img src="i/feature-4.jpg">
						<h4>Easy to setup</h4>
						<p>We came up with a simple system&nbsp;of&nbsp;Constellation patterns&nbsp;that covers the needs of&nbsp;most users</p>
					</div>
				</li>
				<li>
					<div>
						<img src="i/feature-5.jpg">
						<h4>Kickstarter funded</h4>
						<p>Lightpack’s mass production proved real thanks to 5 812 people who trusted us with more than half a million dollars</p>
					</div>
				</li>
				<li>
					<div>
						<img src="i/feature-6.jpg">
						<h4>Remote control app</h4>
						<p>We have a remote control app that&nbsp;can do most of the actions directly from your Android phone</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="b b-fact b-fact-2">
		<div class="b-block">
			<p>With Lightpack, you will have a completely new experience of visual perception while watching movies, playing games, or working with Windows, Linux, and Mac OS X.</p>
			<a class="b-white-butt butt fancy" data-block="#buy-it-now" href="#">buy it now</a>
		</div>
	</div>
	<div class="b b-prismatic">
		<div class="b-block">
			<h2 class="title">Prismatik</h2>
			<p class="desc">Prismatik is a cross-platform software for Lightpack controlling. There’s a desktop Prismatik that works in Windows, Linux and OS X. In addition to desktop version we also have a variety of plugins and connectors ready for service, which allow to control Lightpack from, for example, XBMC. There’s also an Android Prismatik, designed for media centers and HDMI-dongles based on Android 4 OS.</p>
			<a class="b-blue-butt butt" href="downloads.php">downloads</a>
			<div class="windows">
				<img class="l" src="i/prismatic-l.png">
				<img class="c" src="i/prismatic-c.png">
				<img class="r" src="i/prismatic-r.png">
			</div>
		</div>
	</div>
	<div class="b b-news">
		<div class="b-block">
			<h2 class="title">News</h2>
			<ul>
				<li>
					<h5>May 22, 2014</h5>
					<a href="#">AUSTRALIAN PLUGS AND LED-MODULES REPLACEMENT</a>
					<p class="desc">To all our Australian customers and Kickstarter backers - we finally shipped missing plug adapters to almost all Australian orders, now there're only few left to be shipped next week.</p>
				</li>
				<li>
					<h5>May 22, 2014</h5>
					<a href="#">AUSTRALIAN PLUGS AND LED-MODULES REPLACEMENT</a>
					<p class="desc">To all our Australian customers and Kickstarter backers - we finally shipped missing plug adapters to almost all Australian orders, now there're only few left to be shipped next week.</p>
				</li>
				<li>
					<h5>May 22, 2014</h5>
					<a href="#">AUSTRALIAN PLUGS AND LED-MODULES REPLACEMENT</a>
					<p class="desc">To all our Australian customers and Kickstarter backers - we finally shipped missing plug adapters to almost all Australian orders, now there're only few left to be shipped next week.</p>
				</li>

			</ul>
		</div>
	</div>
	<div class="b b-quote">
		<div class="b-block">
			<h3>"Nobody knows the web better than The Webbys team. If Netted says an app is killer or a site is a must-visit, it is."</h3>
			<h5>Arianna Huffington, Huffington Post</h5>
		</div>
	</div>
	<div class="b b-twitter">
		<div class="b-block">
			<ul>
				<li>
					<h4>2 Days ago</h4>
					<h4>@diiim</h4>
					<p class="desc">To all our Australian customers and Kickstarter backers - we finally shipped missing plug.</p>
					<a class="desc" href="https://t.co/dyu23UWQ">https://t.co/dyu23UWQ</a>
				</li>
				<li>
					<h4>2 Days ago</h4>
					<h4>@diiim</h4>
					<p class="desc">To all our Australian customers and Kickstarter backers - we finally shipped missing plug.</p>
					<a class="desc" href="https://t.co/dyu23UWQ">https://t.co/dyu23UWQ</a>
				</li>
				<li>
					<h4>2 Days ago</h4>
					<h4>@diiim</h4>
					<p class="desc">To all our Australian customers and Kickstarter backers - we finally shipped missing plug.</p>
					<a class="desc" href="https://t.co/dyu23UWQ">https://t.co/dyu23UWQ</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="b-sub sub-2">
		<div class="b-block clearfix">
			<div>
				<form action="" id="subscribe-2">
					<input type="text" name="email" placeholder="Enter your email address" data-block="#b-popup-2" required>
					<a href="#" class="ajax b-white-butt butt" onclick="$('#subscribe-2').submit(); return false;">subscribe</a>
				</form>
			</div>
		</div>
	</div>
	<div class="b-footer">
		<div class="b-block">
			<div>
				<ul class="bot-menu">
					<li><a href="about.php">ABOUT US</a></li>
					<li><a href="text.php">PRIVACY POLICY</a></li>
					<li><a href="detail.php">TERMS OF SERVICE</a></li>
					<li><a href="#" class="fancy" data-block="#support">SUPPORT</a></li>
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
		<div id="support">
			<div class="for_all b-popup">
				<h2 class="title">Support</h2>
				<h3 class="subtitle">We would like to receive feedback from you. Questions, collaboration proposal or any suggestions is appretiated too. But, please, be sure you check our docs, faq or how it works pages for common Lightpack info first.</h3>
				<form class="clearfix" action="kitsend.php" method="POST" id="support-form" data-block="#support">		
					<div class="left">
						<label class="topic">Please select your subject first:</label>
						<select name="theme">
							<option value="1" selected>Order, payment, shipment or buy process</option>
  							<option value="2">Lightpack mount and setup</option>
  							<option value="3">Prismatik questions, suggestions and issues</option>
  							<option value="4">Something goes wrong</option>
  							<option value="5">Partnership</option>
  							<option value="6">Press</option>
  							<option value="7">Returns</option>
  							<option value="8">LED-modules replacement</option>
  							<option value="9">Other</option>
						</select>
					</div>
					<div class="left">
						<label class="topic" for="email">Email:</label>
						<input type="text" id="email" name="email" placeholder="Your email" required>
					</div>
					<textarea class="left" name="message" required placeholder="Your message"></textarea>
					<input type="hidden" name="subject" value="Support">
					<a href="#" class="ajax b-blue-butt butt" onclick="$('#support-form').submit(); return false;">Send</a>
				</form>
				<span class="close" onclick="$.fancybox.close();"></span>
			</div>
		</div>
		<div id="buy-it-now">
			<div class="for_all b-popup buy-it-now">
				<h4 class="topic">Sparkle brighter than Fireworks.</h4>
				<p class="desc">Blue, red, green and white. Pure colors with Lightpack. + Free shipping all around the world.</p>
				<form class="clearfix" action="kitsend.php" method="POST" id="buy-it-now-form" data-block="#buy-it-now">		
					<ul>
						<li class="one">
							<h4 class="topic">1 Lightpack</h4>
							<h4 class="topic price"><strike>$119</strike>$89</h4>
							<a href="#" class="ajax b-white-butt butt" onclick="$('#buy-it-now-form').submit(); return false;">Buy it now</a>
						</li>
						<li class="two">
							<h4 class="topic">2 Lightpack</h4>
							<h4 class="topic price"><strike>$238</strike>$178</h4>
							<a href="#" class="ajax b-white-butt butt" onclick="$('#buy-it-now-form').submit(); return false;">Buy it now</a>
						</li>
						<li class="three">
							<h4 class="topic">3 Lightpack</h4>
							<h4 class="topic price"><strike>$357</strike>$267</h4>
							<a href="#" class="ajax b-white-butt butt" onclick="$('#buy-it-now-form').submit(); return false;">Buy it now</a>
						</li>
					</ul>
					<input type="hidden" name="subject" value="buy-it-now">
				</form>
				<span class="close" onclick="$.fancybox.close();"></span>
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
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/device.js"></script>
<script type="text/javascript" src="js/KitSend.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>