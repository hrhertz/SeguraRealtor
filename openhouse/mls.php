<HTML>
<HEAD>
<TITLE>
Segura Realtor (dot) NET
</TITLE>
<META NAME="resource-type" CONTENT="document">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="vi">
<meta name="title" content="Segura Realtor (dor) NET">
<META NAME="ROBOTS" CONTENT="noindex, nofollow">
<META NAME="author" CONTENT="KEMS">
<meta name="language" content="en-us">
<meta name="classification" content="">
<meta name="rating" content="general"
<meta name="keywords" content=" ">
<meta name="revisit-after" content="7 days">
<META NAME="copyright" CONTENT="Copyright ▒ 2014">
<META NAME="distribution" CONTENT="Global">

<style>
a:link {text-decoration:none;}
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;}
a:active {text-decoration:underline;}
</style>

</HEAD>
<body  text="#000000" link="#00FFFF" VLINK="#00FFFF" BGCOLOR="#ffffff" ALINK="#0F0000">

<?php
	$file = 'mlsnumber.txt'; 
	$MLSIDA =  file_get_contents($file);
?>

<p align="right">

	<font size="3" face="Courier New"><b>S</b>egura <b>R</b>ealtor  (dot) <b>NET</b></b></font>

</p>

<P>&nbsp;</P>

<?php
	echo 'MLS Number: ' . $MLSIDA;
?>

<P></P>

<FORM action="http://openhouse.segurarealtor.net/setmlsid.php" method="get">

    <P>

	MLS Number:
	<input name="mlsnumber" id="mlsnumber" type="text" size="8" maxlength=8 class="formbox">
	<INPUT type="submit" value="Set"> <INPUT type="reset">

    </P>

</FORM>

Example MLS: 7142930

</BODY>

