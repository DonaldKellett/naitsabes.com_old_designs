<?php
require 'PHPMailer-5.2.16/PHPMailerAutoload.php';
?>
<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Donald S. Leung - An enthusiastic Web Developer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style media="screen">
		#latest-news a {
			text-decoration: underline;
		}
		</style>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<!-- <span class="avatar"><img src="images/avatar.jpg" alt="" /></span> -->
							<p>
								<marquee title="Latest News" id="latest-news" style="font-family:monospace;background-color:#000000;color:#ff0000;text-transform:none">
									Test your PHP code locally with no difficulty using <a href="https://github.com/DonaldKellett/PHPTester/releases/latest" target="_blank">PHPTester</a>!
									Ensure the quality of your software using Test-Driven Development in <a href="http://github.com/DonaldKellett/RubyTester/releases/latest" target="_blank">Ruby</a>, <a href="https://github.com/DonaldKellett/PHPTester/releases/latest" target="_blank">PHP</a> and <a href="https://github.com/DonaldKellett/JSTester/releases/latest" target="_blank">JS</a>!
									If you are a web developer or computer programmer wanting to polish up your programming skills or are just someone who loves to code, don't forget to join in the fun by <a href="http://www.codewars.com/r/2QXbZQ" target="_blank">creating an account on Codewars</a>!
								</marquee>
							</p>
							<h1>Donald <span title="'S' for Sebastian">S.</span> Leung</h1>
							<p>An enthusiastic Web Developer</p>
						</header>

						<hr />
						<h2>Contact Me</h2>
						<form method="post" action="#">
							<div class="field">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<div class="select-wrapper">
									<select name="category" id="category" style="text-transform:none">
										<option value="">- Select a Category -</option>
										<option value="Private Message">Private Message (PM)</option>
										<option value="Website Request">Website Request (i.e. you would like me to help you design your website) - Prices determined upon negotiation</option>
										<option value="Business Mail">Business-Related Mail (including but not limited to business deals, negotiations or mail directed to an organisation Donald S. Leung belongs to)</option>
									</select>
								</div>
							</div>
							<div class="field">
								<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
							</div>
							<div class="field">
								<input type="submit" value="Send" />
								<input type="reset" value="Reset" />
							</div>
							<?php
							if ($_SERVER['REQUEST_METHOD'] === 'POST') {
								// Form Validation
								if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['category']) || empty($_POST['message'])) {
									echo "<p style='font-size:small;color:red'><span class='icon fa fa-exclamation-circle'></span> All fields are required</p>";
								} else {
									if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
										$mail = new PHPMailer;
										$mail->setFrom($_POST['email']);
										$mail->addReplyTo($_POST['email']);
										$mail->addAddress('i.donaldl@me.com');
										$mail->addAddress('dleung@connect.kellettschool.com');
										$mail->Subject = "{$_POST['category']} from Naitsabes.com";
										$mail->Body = $_POST['message'];
										if ($mail->send()) {
											echo "<p style='font-size:small;color:green'><span class='icon fa fa-check'></span> Message Sent</p>";
										} else {
											echo "<p style='font-size:small;color:red'><span class='icon fa fa-exclamation-circle'></span> An unknown error occurred and the message was not sent, please try again later</p>";
										}
									} else {
										echo "<p style='font-size:small;color:red'><span class='icon fa fa-exclamation-circle'></span> Invalid Email Address</p>";
									}
								}
							}
							?>
						</form>
						<hr />

						<footer>
							<ul class="icons">
								<li><a title="Contact Me on Facebook" href="https://www.facebook.com/i.donaldl" target="_blank" class="fa-facebook">Facebook</a></li>
								<li><a href="https://www.facebook.com/manbehindthescreen01" title="Keep up with my software (and other tech-related) updates by following my Facebook page" target="_blank" class="fa-facebook-official">Facebook Page</a></li>
								<li><a href="https://github.com/DonaldKellett" title="Feel free to visit my GitHub Page and view, download, fork and/or contribute to any of my 100+ repos" target="_blank" class="fa-github">GitHub</a></li>
								<li><a href="https://gitter.im/orgs/DonaldKellett/rooms" title="Feel free to drop into one of my chat rooms and start a conversation on Gitter" target="_blank" class="fa-comments">Gitter</a></li>
								<li><a href="http://www.codewars.com/r/2QXbZQ" title="If you are also a web developer / computer programmer who wants to polish up his/her coding skills or simply like to code for fun, don't forget to join in all the fun by creating an account on Codewars" target="_blank" class="fa-gamepad">Codewars</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; <?php echo date("Y"); ?> Donald Sebastian Leung.  All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>