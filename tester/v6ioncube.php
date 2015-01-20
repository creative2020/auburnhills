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
       <table width="800" border="0" align="center" cellpadding="10" cellspacing="0">
         <tr>
           <td bgcolor="#99FF66"><p><strong>ionCube Loader Test Instructions:</strong></p>
             <p>1) Click the test link in the red box below to open the ionCube test script.</p>
             <p> 2) Review the results on the test page. </p>
             <p>&gt; If the results show that ionCube loaders are already installed, follow the instructions on the loader result page (if any), then download and install the ionCube version of the calendar using the links below.</p>
             <p><strong>IMPORTANT!</strong> If you see a message to download any loaders for run-time loading, after installing the calendar you need to download/uncompress the loaders and place them in the calendar installation directory on the server in a directory named ioncube (all lower-case).</p>
             <p>&gt; If you see any other error messages, please forward the link to this file to your web host provider and/or server administrator. With the instructions on the page, they should be able to enable ionCube loaders for you so you can use the calendar.</p>
             <p><a href="http://www.easyphpcalendar.com/support/index.php" target="_blank"><strong>Need Support?</strong> If you need help with any of this, please let us know by clicking this link and Submitting a Support Ticket.</a></p></td>
         </tr>
       </table>
<br>
       <br>
       <br>
       <table width="800" border="0" align="center" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
         <tr>
           <td align="center" valign="middle" bgcolor="#274A72" class="style12">ionCube Loader</td>
           <td width="50%" rowspan="2" align="center" valign="middle" bgcolor="#FFFF66" class="style12"><span class="style11 style8 style12">
             <p><span class="style15">Download the ionCube Loader  Version:</span></p>
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

if ($phpVersion!=5) { ?>
           </span>
             <table width="325" border="0" cellspacing="1" cellpadding="4">
               <tr align="center" bgcolor="#993300">
                 <td width="33%" align="left" bgcolor="#662100">PHP 4.x</td>
                 <td width="33%" bgcolor="#D24400"><span class="style21">ionCube</span></td>
               </tr>
               <tr align="center">
                 <td align="left" bgcolor="#006633"><span class="style21">Zip File </span></td>
                 <td bgcolor="#E6E6E6"><a href="http://www.easyphpcalendar.com/getFile/?file=ic">Download</a></td>
               </tr>
             </table>
             <br>
             <?php } else { ?>
             <table width="325" border="0" cellspacing="1" cellpadding="4">
               <tr align="center" bgcolor="#993300">
                 <td width="33%" align="left" bgcolor="#662100">PHP 5.x</td>
                 <td width="33%" bgcolor="#D24400"><span class="style21">ionCube</span></td>
               </tr>
               <tr align="center">
                 <td align="left" bgcolor="#006633"><span class="style21">Zip File </span></td>
                 <td bgcolor="#E6E6E6"><a href="http://www.easyphpcalendar.com/getFile/?file=ic5">Download</a></td>
               </tr>
             </table>
             <br>
             <?php } ?></td>
         </tr>
         <tr>
           <td width="50%" align="center" valign="middle" bgcolor="#5E0000"><a href="loader-wizard.php" target="_blank"><span class="style11 style8 style12">&gt;&gt; Click Here to run the ionCube loader test script &lt;&lt;</span></a></td>
         </tr>
       </table>
       <br />
     <p align="center" class="style1">:: Tester Version 3.5 | <a href="http://www.EasyPHPCalendar.com/">Easy PHP Calendar</a> | Copyright 2014 NashTech, Inc. ::</p></td>
   </tr>
 </table>
</body>
</html>
