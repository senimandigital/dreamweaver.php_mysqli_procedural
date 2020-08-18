<?php
# FileName="Connection_php_mysqli_procedural.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_senimandigital = "localhost";
$database_senimandigital = "dreamweaver_phpmysql";
$username_senimandigital = "senimandigital";
$password_senimandigital = "senimandigital";
$senimandigital = mysqli_connect($hostname_senimandigital, $username_senimandigital, $password_senimandigital); 
if (mysqli_connect_errno()) {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  exit(); }

// <config-start> We will only use global variables to define all basic information.
$_SERVER['DOMAIN']['SITE']          = 'http://phpmysource.kom';
$_SERVER['DOMAIN']['ADMINISTRATOR'] = 'http://administrator.phpmysource.kom';
$_SERVER['DOMAIN']['ASSETS']        = 'http://assets.phpmysource.kom';
$_SERVER['DOMAIN']['IMAGE']         = 'http://image.phpmysource.kom';
$_SERVER['DOMAIN']['JAVASCRIPT']    = 'http://javascript.phpmysource.kom';
$_SERVER['DOMAIN']['PHPMYADMIN']    = 'http://phpmyadmin.phpmysource.kom';
$_SERVER['DOMAIN']['UPLOAD']        = 'http://upload.phpmysource.kom';
$_SERVER['DOMAIN']['XML']           = 'http://xml.phpmysource.kom';

$_SERVER['HOSTING']['ROOT']          = 'D:/Online/Google Drive/phpmysource.kom/';
$_SERVER['HOSTING']['ADMINISTRATOR'] = 'D:/Online/Google Drive/phpmysource.kom/administrator/';
$_SERVER['HOSTING']['ASSETS']        = 'D:/Online/Google Drive/phpmysource.kom/assets/';
$_SERVER['HOSTING']['IMAGE']         = 'D:/Online/Google Drive/phpmysource.kom/image/';
$_SERVER['HOSTING']['JAVASCRIPT']    = 'D:/Online/Google Drive/phpmysource.kom/javascript/';
$_SERVER['HOSTING']['PHPMYADMIN']    = 'D:/Online/Google Drive/phpmysource.kom/phpmyadmin/';
$_SERVER['HOSTING']['UPLOAD']        = 'D:/Online/Google Drive/phpmysource.kom/upload/';
$_SERVER['HOSTING']['XML']           = 'D:/Online/Google Drive/phpmysource.kom/xml/';
// </config-end>

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "")
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
