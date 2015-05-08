<?php
	// HEADER
	$zender = "FROM:".$_POST['email'];
	// MESSAGE
	$mail_body = "Geslacht:\t\t\t".$_POST['aanspreektitel']."\n";
	$mail_body .= "Naam:\t\t\t".$_POST['voornaam']." ".$_POST['naam']."\n";
	$mail_body .= "-------------------------------------------------\n";
	$mail_body .= "Opmerkingen:\t\t\t".$_POST['opmerkingen']."\n";
	// SEND
	mail("jakob.vanackere@hotmail.com", "Jakob Vanackere contact", $mail_body, $zender) or die ("Uw mail is niet verstuurd door een technische fout, probeer het later nog een keer!")
?>
	

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Jakob Vanackere</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="reset.css">
<link href="favicon.ico" rel="icon" type="image/x-icon"/>
<script type="text/javascript" src="js/modernizr-latest.js"></script>
</head>

<body>
<div id="wrapper">
	<header>
	</header>
<aside>
	<a href="index.html"><img src="img/jakob_portrait.jpg"></a>
	<h3>Jakob Vanackere</h3>
	<nav>
    <ul>
		<li><a href="index.html" class="selected">home</a></li>
		<li><a href="info.html">info</a></li>
		<li><a href="illustrations.html">illustrations</a></li>
    <li><a href="graphicdesign.html">graphic design</a></li>
    <li><a href="websites.html">websites</a></li>
		<li><a href="contact.html">contact</a></li>
	</ul>
    </nav>
</aside>
<div id="content">
<div id="contactinfo">
<h2>MAIL</h2>
<br>
Uw mail is succesvol verzonden naar Jakob Vanackere.

</div>
