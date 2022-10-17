<?php
session_start();

require_once('config.php');
error_reporting(E_ALL); 
// Logarea sistem
if (file_exists('login.php'))
{     include_once('login.php');   } else
{     die("<br>Eroare: Nu se gaseste fisierul"); }

?>
<html>
<body bgcolor="#CCFFCC"> 
</html>
<a class="nav-link page-scroll" href="public/pages/login.html">Dream Team</a>