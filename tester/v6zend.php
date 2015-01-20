<?php
// FAILURE MESSAGES
$zendFail = "<p>* We were unable to determine if a compatible version of Zend Optimizer could be found on this server. In order to run the Easy PHP Calendar, your web host provider should install the latest version of Zend Optimizer on the server (or the server must have passed the ionCube Loader test). Zend Optimizer is free and more information can be found at <a href=\"http://www.zend.com/en/products/guard/downloads\" target=\"_blank\">www.zend.com.</a></p>";
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
                  <td width="150" align="left" valign="top" bgcolor="#274A72"><span class="style2">
<?php
// READ PHP VERSION
$phpVerCk = explode(".",phpversion());
$phpVerCk = $phpVerCk[0].".".$phpVerCk[1];
$phpVersion = explode(".",phpversion());
$phpVersion = $phpVersion[0];

// TEST ZEND OPTIMIZER
ob_start();
phpinfo(INFO_GENERAL);
$output = ob_get_contents();
ob_end_clean();
$output = str_replace(array("&gt;", "&lt;", "&quot;", "&amp;", "&#039;", "&nbsp;"), array(">", "<", "\"", "&", "'", " "), $output);

if (strstr($output, "Zend Optimizer")) {

  // GET ZEND VERSION NUMBER
  $version = split("Zend Optimizer",$output);
  $version = split(",",$version[1]);
  $version = trim($version[0]);

  if (!strstr($version,"v")) {
    $zend = "Zend Optimizer Detected - Unknown Version";
    $zendColor = "Blue";
    $version = "0";
	}
  else {
    $version = str_replace("v","",$version);
	
	$version = explode(".",$version);
	$subVersion = $version[2];
	$dummy = array_pop($version);
	$version = implode(".",$version);

	if (($version >= "2.6" && $phpVerCk[0]=="4") || ($version >= "3.3" && $phpVerCk[0]=="5")) {
      $zend = "Pass";
      $zendColor = "green";
	  }
	else {
      $zend = "Fail - Installed Version: ".$version.".".$subVersion;
      $zendColor = "red";
      }	  
	}
  } 
else {
  $zend = "Fail - Zend Optimizer Not Detected";
  $zendColor = "red";
  }

// IS PHPINFO DISABLED?
if (strstr($output, "has been disabled")) {
  $zend = "Unable to determine - phpinfo() is disabled";
  $zendColor = "blue";
  }

if ((float)$phpVerCk >= "5.3") {
  $zoWarn = "Warning! Zend Optimizer is not currently supported on PHP 5.3 or greater. Please proceed to the ionCube test.";
  $zend = "Fail";
  $zendColor = "red";
  }
if ((float)$phpVerCk < "5") {
  $zoWarn = "Warning! Easy PHP Calendar Version 6 is not currently supported on PHP 4.X or less. Please proceed to the ionCube test.";
  $zend = "Fail";
  $zendColor = "red";
  }
?>
                    <strong>Zend Optimizer</strong></span></td>
                  <td width="200" align="left" valign="top" bgcolor="#F3F3F3"><strong><font color=<?php echo $zendColor ?>><?php echo $zend ?></font></strong>
                    <?php
			   // DETERMINE NEEDED ZEND OPTIMIZER VERSION
			   if ($phpVerCk[0]=="4") $phpVerShow = "2.6.0";
			   if ($phpVerCk[0]=="5") $phpVerShow = "3.3.0";
?></td>
                  <td width="40%" bgcolor="#F3F3F3"><?php if ($zend!="Pass") {?>
<em>Zend Optimizer must be Version <?php echo $phpVerShow; ?> or greater! The latest version of Zend Optimizer can be downloaded for free from <a href="http://www.zend.com/en/products/guard/downloads" target="_blank">www.zend.com</a> and installed by your server administrator or web host provider.</em><?php } ?></td>
                </tr>
              </table>
<br>
       <?php
if ($zend=="Pass" || $zendColor=="blue") {
?>
       <table width="800" border="0" align="center" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
         <tr>
           <td align="center" valign="middle" bgcolor="#274A72" class="style12">Zend Optimizer</td>
           <td width="50%" rowspan="2" align="center" valign="middle" bgcolor="#FFFF66" class="style12"><span class="style11 style8 style12">
            <p><span class="style15">Download the Zend Optimizer  Version:</span></p>
           </span>
             <?php if ($phpVersion==5) { ?>
             <table width="325" border="0" cellspacing="1" cellpadding="4">
               <tr align="center" bgcolor="#993300">
                 <td width="33%" align="left" bgcolor="#662100">PHP 5.x</td>
                 <td width="34%"><span class="style19"><strong>Zend</strong></span></td>
               </tr>
               <tr align="center">
                 <td align="left" bgcolor="#006633"><span class="style21">Zip File </span></td>
                 <td bgcolor="#E6E6E6"><?php if ($zend=="Pass" || $zendColor=="blue") {?>
                   <a href="http://www.easyphpcalendar.com/getFile/?file=zc5">Download</a>
                   <?php } else {echo "NA";} ?></td>
               </tr>
             </table>
             <br>
           <?php } ?></td>
         </tr>
         <tr>
           <td width="50%" align="center" valign="middle" bgcolor="#006600"><span class="style11 style8 style12">This server appears compatible with the <br>
            Easy PHP Calendar and Zend Optimizer! <br>
  <?php if ($zendColor=="blue") echo "<br /><font color=orange>However, we were unable to determine if Zend Optimizer was installed.</font><br /><br />"; ?>
           </span><span class="style8 style16">Download and install the <br>
           trial version to confirm compatibility.</span><span class="style12">
           </span></td>
         </tr>
       </table>       
       <?php } ?>
       <?php

if ($zend!="Pass") {
?>
       <br>
       <table width="800" border="0" align="center" cellpadding="4" cellspacing="2">
         <tr>
           <td bgcolor="#EAB8B5"><strong>Failure Messages and Suggestions:</strong></td>
         </tr>
         <tr>
           <td bgcolor="#FCEBDC"><p>
               <?php
if ($zend!="Pass") echo $zendFail;
?>
           </p></td>
         </tr>
       </table>
       <?php } ?>
              <br />
              <div align="center" class="style7">
              <?php 
			  if ($zend=="Pass") echo "<span class='style18'>--- Because the Zend Optimizer test passed, it is not necessary to run the <a href='v6ioncube.php'>ionCube test</a>. ---</span><br />"; 
			  else {
			  ?>
<strong><a href="v6ioncube.php" class="style13">3) Continue to ionCube Support Test</a></strong>
<br />
<br />
<?php } ?>
       </div>
     <p align="center" class="style1">:: Tester Version 3.5 | <a href="http://www.EasyPHPCalendar.com/">Easy PHP Calendar</a> | Copyright 2014 NashTech, Inc. ::</p></td>
   </tr>
 </table>
<?php if ($zoWarn) echo "<script language='javascript' type='text/javascript'>alert('".$zoWarn."');</script>"; ?>
<br>
<br>
</body>
</html>
