<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>PHP Contact Form with JQuery Validation</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

	<style type="text/css">
    body {
	font-family:Arial, Tahoma, sans-serif;
}
#contact-wrapper {
	width:430px;
	border:1px solid #e2e2e2;
	background:#f1f1f1;
	padding:20px;
}
#contact-wrapper div {
	clear:both;
	margin:1em 0;
}
#contact-wrapper label {
	display:block;
	float:none;
	font-size:16px;
	width:auto;
}
form#contactform input {
	border-color:#B7B7B7 #E8E8E8 #E8E8E8 #B7B7B7;
	border-style:solid;
	border-width:1px;
	padding:5px;
	font-size:16px;
	color:#333;
}
form#contactform textarea {
	font-family:Arial, Tahoma, Helvetica, sans-serif;
	font-size:100%;
	padding:0.6em 0.5em 0.7em;
	border-color:#B7B7B7 #E8E8E8 #E8E8E8 #B7B7B7;
	border-style:solid;
	border-width:1px;
}
	</style>
</head>

<body>
<div id="contact-wrapper">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
		<div>
		    <label for="name"><strong>Name:</strong></label>
			<input type="text" size="50" name="contactname" id="contactname" value="" />
		</div>

		<div>
			<label for="email"><strong>Email:</strong></label>
			<input type="text" size="50" name="email" id="email" value="" />
		</div>

		<div>
			<label for="subject"><strong>Subject:</strong></label>
			<input type="text" size="50" name="subject" id="subject" value="" />
		</div>

		<div>
			<label for="message"><strong>Message:</strong></label>
			<textarea rows="5" cols="50" name="message" id="message"></textarea>
		</div>
	    <input type="submit" value="Send Message" name="submit" />
	</form>
</div>
</body>
</html>