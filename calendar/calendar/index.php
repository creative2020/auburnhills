<?php
// Easy PHP Calendar
// Version 6
// Copyright 2001-2006 NashTech, Inc.
// http://www.EasyPHPCalendar.com

// SET ERROR REPORTING
error_reporting(E_ALL ^ E_NOTICE);

// DISABLE DEMO
require_once("config.inc.php");
if ($disableDemo==1) {
  exit;
  }

// VERIFY LICENSE HAS BEEN ENTERED
require_once("license.php");
if ($licenseTsid=="" || $licenseSite=="") {
  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Easy PHP Calendar - Welcome!</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666666;
}
a:link {
	color: #006699;
}
a:visited {
	color: #006699;
}
a:active {
	color: #990000;
}
-->
</style>
</head>
<body>
  <p><strong>Thank you for using the Easy PHP Calendar!</strong></p>
  <p>Please run the <a href="setup/index.php">Setup Manager</a> to configure the Easy PHP Calendar script.
  </p>
  <p>If you experience any issues or script errors, please consult the Help section of the <a href="http://docs.easyphpcalendar.com/" target="_blank">Instructions</a>. </p>
  <p>Your satisfaction is our primary concern and no question is too small to ask. Visit our <a href="http://www.easyphpcalendar.com/forums/">forums</a> if you need assistance with anything.</p>
  <p>DON'T GIVE UP! Installation of encoded files can be tough. If you haven't already, try the Auto-installer.</p>
  <p>------------------------------------------------------</p>
  <p><a href="setup/index.php"><strong>Continue With Setup...</strong></a></p>
  <p>------------------------------------------------------
  <p><a href="http://www.EasyPHPCalendar.com/">Eas yPHP Calendar PHP Calendar Script</a>
</body>
</html>

    <?php
  exit;
  }

// SHOW DEMO
require("demo.php");
?>
  </p>
  