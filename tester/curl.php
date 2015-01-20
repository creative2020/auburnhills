<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cURL Test</title>
<style type="text/css">
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
body {
	background-color: #FFF;
}
</style>
</head>

<body>
<?php
// CHECK THAT CURL IS AVAILABLE IN PHP
if (!function_exists("curl_exec")) {
	echo "cURL is not enabled on this server.";
	exit;
}

// SET UP AND CONNECT TO REMOTE CURL FILE
$curlTestVar["curlTest"] = "EPC";
$curlSes = curl_init();
//curl_setopt($curlSes, CURLOPT_PORT, 80);
curl_setopt($curlSes, CURLOPT_URL, "http://www.easyphpcalendar.com/curlTest.php");
curl_setopt($curlSes, CURLOPT_POST, 1);
curl_setopt($curlSes, CURLOPT_POSTFIELDS, $curlTestVar);
curl_setopt($curlSes, CURLOPT_TIMEOUT, 30);
curl_setopt($curlSes, CURLOPT_RETURNTRANSFER, 1);
$curlCheck = curl_exec($curlSes);

// DISPLAY PASS OR FAIL MESSAGE
if ($curlCheck=="Pass") echo "cURL Test: Pass<br /><br />";
else echo "cURL Test: Fail<br /><br />";

// DISPLAY CURL ERROR IF EXISTS
if (curl_error($curlSes)) {
echo "Error: ".curl_error($curlSes);
}
?>
</body>
</html>