<?php
// TEST SESSIONS
session_start();
$sessionTest = $_SESSION['sessionTest'];

if ($sessionTest!="1234567890") {
  $sesTest = "Fail";
  $sessionsColor = "red";
  }
else {
  $sesTest = "Pass";
  $sessionsColor = "green";
  }

// FAILURE MESSAGES
$sessionsFail = "<p>* The sessions test failed. This means that the parts of the calendar script that require you to log in would not be functional (the Setup Manager and the Event Manager). However, this can be easily fixed by most web host providers. Some hosts may require you to add your own tmp directory in the root directory of your web site (Yahoo for example). Please contact your provider for assistance.</p>";
$phpFail = "<p>* The version of PHP on this server is not compatible with the calendar script. Your web host provider would need to upgrade PHP to Version 4.3.0 or greater.</p>";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Easy PHP Calendar - Compatibility Test Script</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style1 {font-size: 9px}
.style2 {color: #FFFFCC}
.style7 {
	font-size: 18px;
	font-weight: bold;
}
.style8 {font-size: 12px; }
.style11 {color: #003399}
.style12 {
	color: #FFFF00;
	font-weight: bold;
}
body {
	background-color: #00497B;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style13 {
	color: #990000;
	font-weight: bold;
}
.style14 {font-size: 16px}
.style15 {
	color: #006699;
	font-weight: bold;
}
.style16 {color: #FFFF00}
.style17 {color: #990000}
.style18 {font-size: 11px}
.style19 {color: #FFFFFF}
.style21 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>
<body>
 <div align="center">
   <table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
       <td align="left" bgcolor="#0087E3"><a href="index.php"><img src="pageHeader.jpg" alt="Easy PHP Calendar" width="366" height="80" border="0"></a></td>
     </tr>
   </table>
</div>
 <table width="980" border="0" align="center" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
   <tr>
     <td><p align="center" class="style7">Easy PHP Calendar Version 6 </p>
       <p align="center" class="style7">Server Compatibility Test</p>
<div align="center" class="style14"></div>
       <table width="800" border="0" align="center" cellpadding="3" cellspacing="2">
         <tr>
           <td width="150" align="left" valign="top" bgcolor="#006699" class="style2">
<?php
// CHECK PHP VERSION
$phpVerCk = explode(".",phpversion());
$phpVerCk = $phpVerCk[0].".".$phpVerCk[1];

if ((float)$phpVerCk < "4.3") {
  $phpver = "Fail";
  $phpColor = "red";
  }
else {
  $phpver = "Pass";
  $phpColor = "green";
  $phpVersion = explode(".",phpversion());
  $phpVersion = $phpVersion[0];
  }
?>
             <strong>PHP Version</strong></td>
           <td width="200" align="left" valign="top" bgcolor="#F3F3F3"><font color=<?php echo $phpColor; ?>><strong><?php echo $phpver; ?></strong><?php echo " [Version ".phpversion()."]"; ?></font></td>
           <td align="left" valign="top" bgcolor="#F3F3F3"><?php if ($sesTest!="Pass") echo "$phpFail";  ?></td>
         </tr>
         <tr>
           <td colspan="3" align="left" valign="top" bgcolor="#CCCCCC" class="style2">&nbsp;</td>
         </tr>
         <tr>
           <td align="left" valign="top" bgcolor="#006699" class="style2"><strong>Sessions Support</strong></td>
           <td align="left" valign="top" bgcolor="#F3F3F3"><strong><font color=<?php echo $sessionsColor; ?>><?php echo $sesTest; ?></font></strong>
           </td>
           <td align="left" valign="top" bgcolor="#F3F3F3"><?php if ($sesTest!="Pass") echo "$sessionsFail";  ?></td>
         </tr>
       </table>
       <br>
       <div align="center" class="style7"><strong><a href="v6zend.php" class="style13">2) Continue to Zend Optimizer Support Test</a></strong><br>
       <br>
</div>
       <p align="center" class="style1">:: Tester Version 3.5 | <a href="http://www.EasyPHPCalendar.com/">Easy PHP Calendar</a> | Copyright 2014 NashTech, Inc. ::</p></td>
   </tr>
 </table>
</body>
</html>
