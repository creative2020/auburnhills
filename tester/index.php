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
.style7 {
	font-size: 18px;
	font-weight: bold;
}
body {
	background-color: #00497B;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.headerBorder {
	border-radius: 15px; 
    -moz-border-radius: 15px; 
    -webkit-border-radius: 15px; 
    border: 2px solid #373FAD;
}
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
     <td><p align="center" class="style7">Easy PHP Calendar Server Compatibility Test</p>
       <div align="center" class="style14"></div>
       <table width="800" border="0" align="center" cellpadding="10" cellspacing="0">
         <tr>
           <td class="headerBorder" align="center" bgcolor="#FFFF00"><a href="v71X.php" class="style7"><strong>Launch Easy PHP Calendar Version 7.1.X Test</strong></a></td>
         </tr>
       </table>
       <table width="800" border="0" align="center" cellpadding="6" cellspacing="10" >
         <tr>
           <td colspan="3" align="center" bgcolor="#99C7FF" class="style7">Legacy Testers</td>
         </tr>
         <tr>
           <td width="33%" align="center" bgcolor="#99FF66"><a href="v7.php"><strong>Launch Version 7.0.X Test</strong></a></td>
           <td width="34%" align="center" bgcolor="#99FF66"><strong><a href="v6.php">Launch </a></strong><a href="v6.php"><strong>Version 6.X Test</strong></a></td>
           <td width="33%" align="center" bgcolor="#C0C0C0"><strong><a href="http://www.easyphpcalendar.com/compare.php" target="_blank">Compare Version 6 to Version 7</a></strong></td>
         </tr>
       </table>
       <br>
       <table width="800" border="0" align="center" cellpadding="8" cellspacing="2">
         <tr>
           <td bgcolor="#E6E6DF"><strong>Frequently Asked Questions:</strong></td>
         </tr>
         <tr>
           <td bgcolor="#F1F1ED"><p><strong>Q:</strong> Can someone test my server and upload the files for me?<br>
             <br>
             <strong>A:</strong> Sure, we can help you upload the files for free. Just open a <a href="https://www.easyphpcalendar.com/support/clientarea.php" target="_blank">Support Ticket</a> and request an installation. </p></td>
         </tr>
         <tr>
           <td bgcolor="#F1F1ED"><strong>Q:</strong> What if the decoder test(s) fail?<br>
             <br>
             <strong>A: </strong>You should check with your web host provider to see if they will install the necessary components and/or configure the server for the required loader. Most servers easily support the loaders and they are free for web hosts to install on their server(s). </td>
         </tr>
         <tr>
           <td bgcolor="#F1F1ED"><strong>Q:</strong> How can I verify if cURL is working on my server?<br>
             <br>
           <strong>A: </strong>You only need to run this test if instructed by Easy PHP Calendar support. Click the <a href="curl.php" target="_blank">cURL test script</a> and you should see a &quot;Pass&quot; report in the new window. Anything but &quot;Pass&quot; indicates an issue with cURL. A blank screen also indicates a failure of this test.</td>
         </tr>
       </table>
     <p align="center" class="style1">:: Tester Version 3.5 | <a href="http://www.EasyPHPCalendar.com/">Easy PHP Calendar</a> | Copyright 2014 NashTech, Inc. ::</p></td>
   </tr>
 </table>
</body>
</html>
