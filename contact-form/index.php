<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = '<hr>';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' <hr>';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
	<head>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="generator" content="RapidWeaver" />
		
		
		<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/affero/consolidated-13.css" />
		
		
		
		
		
		
			
		
		<!--[if lt IE 9]>
	      <script src="%pathto(js/html5shiv.min.js)"></script>
	      <script src="%pathto(js/respond.min.js)"></script>
	    <![endif]-->
		<script type="text/javascript" src="../rw_common/themes/affero/js/jquery.min.js"></script>
		<script type="text/javascript" src="../rw_common/themes/affero/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../rw_common/themes/affero/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript" src="../rw_common/themes/affero/js/pre.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#affero-menu').mmenu({
					searchfield		: false,
					counters		: true,
					header			: {
						add		: false,
						update	: true,
						title	: ''
					},
					footer			: {
						add		: true,
						update	: true,
						title	: 'Last update: 3/9/16'
					}
				});
			});
		</script>
		
		
			
		
		
		<title>Contact | Affero</title>	
		
	</head>
	<body>
		<!--[if lt IE 9]>
			<div class="ie8Message info-box box-warning">
				<h3>Your Browser Is Too Old!</h3>
				You are using a less stable, insecure, slow version of Internet Explorer and this page may not display properly. Learn why you should and how to update <a href="https://browser-update.org/update.html#3">here</a>.
			</div>
		<![endif]-->
		<div class="affero-banner">
					
		</div>
		<div id="affero-page">
			<header>
				<div class="affero-header">
					<a id="affero-menu-toggle" class="FixedTop" href="#affero-menu"><span></span></a>
					<a href="https://stuhoffman.github.io/TapClash-project/"><img src="../rw_common/images/1ld-logo" width="155" height="100" alt="Site logo"/><h1>Affero</h1></a>
				</div>
			</header>
			<div class="affero-padding">
					
				<h2 class="affero-slogan">Changing the world, one site at a time&hellip;</h2>
				
				<div class="affero-content">
					
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
				</div>
			</div>
		</div>
		<div class="affero-shaddow"> </div>
		<div class="affero-footer">
			Theme by 1LD  <a href="#" id="rw_email_contact">Contact Us</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":st";var _rwObsfuscatedHref3 = "uho";var _rwObsfuscatedHref4 = "ffm";var _rwObsfuscatedHref5 = "an@";var _rwObsfuscatedHref6 = "mac";var _rwObsfuscatedHref7 = ".co";var _rwObsfuscatedHref8 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
		</div>	
		<nav id="affero-menu">
			<div>
				<a class="affero-site-link" href="https://stuhoffman.github.io/TapClash-project/"><img src="../rw_common/images/1ld-logo" width="155" height="100" alt="Site logo"/><h1>Affero</h1></a>
				<ul><li><a href="../" rel="">Home</a></li><li><a href="../blog/" rel="">Blog</a></li><li><a href="../styled/" rel="">Other-Pages</a><ul><li><a href="../styled/photos/" rel="">Album</a></li><li><a href="../styled/downloads/" rel="">File Sharing</a></li><li><a href="../styled/code/" rel="">Sub-Pages</a><ul><li><a href="../styled/code/styled-2/" rel="">Page 1</a></li><li><a href="../styled/code/styled-4/" rel="">Page 2</a></li><li><a href="../styled/code/styled-3/" rel="">Page 3</a></li></ul></li></ul></li><li><a href="./" rel="" class="affero-current-page">Contact</a></li></ul>
				<aside>
					<h2 class="affero-sidebar-title">Sidebar</h2>
					<span style="font-size:14px; color:#909090;">Lorem ipsum dolor sit amet, sapien platea morbi dolor lacus nunc, nunc ullamcorper. Felis aliquet egestas vitae, nibh ante quis quis dolor sed mauris. Erat lectus sem ut lobortis, adipiscing ligula eleifend, sodales fringilla mattis dui nullam. Ac massa aliquet.</span>
					
				</aside>
			</div>
			
		</nav>
		<script type="text/javascript" src="../rw_common/themes/affero/js/toggles/featured-image.js"></script>
		
	</body>
</html>

