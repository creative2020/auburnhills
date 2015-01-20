<?php
// TEST SESSIONS
session_start();
$_SESSION['sessionTest'] = "1234567890";
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
     <td><p align="center" class="style7">Easy PHP Calendar Version 7.0.X</p>
       <p align="center" class="style7">Server Compatibility Test</p>
       <div align="center" class="style14"></div>
       <table width="800" border="0" align="center" cellpadding="10" cellspacing="0">
         <tr>
           <td bgcolor="#99FF66"><p><strong>Instructions - Please Read!</strong></p>
             <p>For a server to be compatible with  <strong>Easy PHP Calendar  7.0.X</strong>:</p>
             <p>1) It must pass the PHP Version test.  </p>
           <p> 2) It must  pass the Zend <em><strong>OR</strong></em> the ionCube Loader test (it does NOT need to pass both).</p></td>
         </tr>
       </table>
       <br>
       <div align="center" class="style7"><strong><a href="v7php.php" class="style13">&gt;&gt; Continue to PHP Test &lt;&lt;</a></strong></div><br>
<br>
<p align="center" class="style1">:: Tester Version 3.5 | <a href="http://www.EasyPHPCalendar.com/">Easy PHP Calendar</a> | Copyright 2014 NashTech, Inc. ::</p></td>
   </tr>
 </table>
</body>
</html>
