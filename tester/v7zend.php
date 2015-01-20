<?php
// READ PHP VERSION
$phpVerCk = explode(".",phpversion());
$phpVerCk = $phpVerCk[0].".".$phpVerCk[1];
$phpVersion = explode(".",phpversion());
$phpVersion = $phpVersion[0];

//////////////////////////////
// READ PHPINFO CONTENTS /////
//////////////////////////////
ob_start();
phpinfo(INFO_GENERAL);
$output = ob_get_contents();
ob_end_clean();
$output = str_replace(array("&gt;", "&lt;", "&quot;", "&amp;", "&#039;", "&nbsp;"), array(">", "<", "\"", "&", "'", " "), $output);

////////////////////////////////////
// CHECK FOR ZEND OPTIMIZER ////////
////////////////////////////////////
if ((float)$phpVerCk <= "5.2") {

  // SET LOADER TYPE TO OPTIMIZER
  $loaderType="Optimizer";
  $loaderFile="Zend Optimizer PHP 5.0, 5.1, 5.2";

  // GET VERSION NUMBER
  $versionO = split("Zend Optimizer",$output);
  $versionO = split(",",$versionO[1]);
  $versionO = trim($versionO[0]);

  if (!strstr($versionO,"v")) {
    $zend = "Zend Optimizer Detected - Unknown Version";
    $zendColor = "Blue";
    $versionO = "0";
	}
  else {
    $versionO = str_replace("v","",$versionO);
	
	$versionO = explode(".",$versionO);
	$subVersion = $versionO[2];
	$dummy = array_pop($versionO);
	$versionO = implode(".",$versionO);

	if (($versionO >= "2.6" && $phpVerCk[0]=="4") || ($versionO >= "3.3" && $phpVerCk[0]=="5")) {
      $zend = "Pass";
      $zendColor = "green";
	  }
	else {
      $zend = "Fail - Installed Version: ".$versionO.".".$subVersion;
      $zendColor = "red";
      }	  
	}
  } 
if (!strpos($output, "Zend Optimizer") && (float)$phpVerCk <= "5.2") {
  $zend = "Fail - Zend Optimizer Not Detected";
  $zendColor = "red";
  }

////////////////////////////////////
// CHECK FOR ZEND GUARD ////////////
////////////////////////////////////

if ((float)$phpVerCk == "5.3") {

  // SET LOADER TYPE TO GUARD
  $loaderType="Guard";
  $loaderFile="Zend Guard PHP 5.3";

  // GET VERSION NUMBER
  $versionO = explode("Zend Guard",$output);
  $versionO = explode(",",$versionO[1]);
  $versionO = trim($versionO[0]);

  if (!strstr($versionO,"v")) {
    $zend = "Zend Guard Detected - Unknown Version";
    $zendColor = "Blue";
    $versionO = "0";
	}
  else {
    $versionO = str_replace("v","",$versionO);
	
	$versionO = explode(".",$versionO);
	$subVersion = $versionO[2];
	$dummy = array_pop($versionO);
	$versionO = implode(".",$versionO);

	if (($versionO >= "2.6" && $phpVerCk[0]=="4") || ($versionO >= "3.3" && $phpVerCk[0]=="5")) {
      $zend = "Pass";
      $zendColor = "green";
	  }
	else {
      $zend = "Fail - Installed Version: ".$versionO.".".$subVersion;
      $zendColor = "red";
      }	  
	}
  } 
if (!strpos($output, "Zend Guard") && (float)$phpVerCk == "5.3") {
  $zend = "Fail - Zend Guard Not Detected";
  $zendColor = "red";
  }

/////////////////////////////
// IS PHPINFO DISABLED? /////
/////////////////////////////
if (strstr($output, "has been disabled")) {
  $zend = "Unable to determine - phpinfo() is disabled";
  $zendColor = "red";
  }
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
       <table width="800" border="0" align="center" cellpadding="3" cellspacing="2">
  <tr>
                  <td width="150" align="left" valign="top" bgcolor="#274A72"><span class="style2">
                    <strong>Zend <?php echo $loaderType; ?></strong></span></td>
                  <td width="200" align="left" valign="top" bgcolor="#F3F3F3"><strong><font color=<?php echo $zendColor ?>><?php echo $zend ?></font></strong>
                    <?php
			   // DETERMINE NEEDED ZEND OPTIMIZER VERSION
			   if ($loaderType=="Optimizer") $phpVerShow = "3.3.0";
			   if ($loaderType=="Guard") $phpVerShow = "5.5.0";
?></td>
                  <td width="40%" bgcolor="#F3F3F3"><?php if ($zend!="Pass") {?>
<em>Zend <?php echo $loaderType; ?> must be Version <?php echo $phpVerShow; ?> or greater! The latest version of Zend <?php echo $loaderType; ?> can be downloaded for free from <a href="http://www.zend.com/en/products/guard/downloads" target="_blank">www.zend.com</a> and installed by your server administrator or web host provider.</em><?php } ?></td>
                </tr>
              </table>
<br>
       <?php
if ($zend=="Pass" || $zendColor=="blue") {
?>
       <table width="800" border="0" align="center" cellpadding="4" cellspacing="2" bgcolor="#FFFFFF">
         <tr>
           <td align="center" valign="middle" bgcolor="#274A72" class="style12">Zend <?php echo $loaderType; ?></td>
           <td width="50%" rowspan="2" align="center" valign="middle" bgcolor="#FFFF66" class="style18">To download the version for your server (<a href="http://www.easyphpcalendar.com/buyNow.php" target="_blank">after purchasing</a>),<br>
               visit the Client Area and download the <strong>Current Release</strong> file<br>
               with the title (<strong><?php echo $loaderFile; ?></strong>).</td>
         </tr>
         <tr>
           <td width="50%" align="center" valign="middle" bgcolor="#006600"><span class="style11 style8 style12">This server appears compatible with  <br>
            Easy PHP Calendar and Zend <?php echo $loaderType; ?>! </span><span class="style12">
           </span></td>
         </tr>
       </table>       
       <?php } 

///////////////////////////////////////
// FAILURE MESSAGE ////////////////////
///////////////////////////////////////
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
if ($zend!="Pass") {
?>
<p>* We were unable to determine if a compatible version of Zend <?php echo $loaderType; ?> could be found on this server. In order to run the Easy PHP Calendar, your web host provider should install the latest version of Zend <?php echo $loaderType; ?> on the server (or the server must have passed the ionCube Loader test). Zend <?php echo $loaderType; ?> is free and more information can be found at <a href=\"http://www.zend.com/en/products/guard/downloads\" target=\"_blank\">www.zend.com.</a></p><p>Please check with your host to see if Zend <?php echo $loaderType; ?> is installed for your web space. If it is, you can run the calendar script.</p>
<?php } ?>
           </p></td>
         </tr>
       </table>
       <?php } ?>
              <br />
              <div align="center" class="style7">
              <?php 
			  if ($zend=="Pass") echo "<span class='style18'>--- Because the Zend $loaderType test passed, it is not necessary to run the <a href='v7ioncube.php'>ionCube test</a>. ---</span><br />"; 
			  else {
			  ?>
<strong><a href="v7ioncube.php" class="style13">&gt;&gt; Continue to ionCube Support Test &lt;&lt;</a></strong>
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
