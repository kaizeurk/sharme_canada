<?php 
	if(isset($_GET['langId']))
	{
	   $langId = $_GET['langId'];
	 
	  // register the session and set the cookie
	   $_SESSION['langId'] = $lang;
	 
	   setcookie('langId', $lang, time() + (3600 * 24 * 30));
	}
	else if(isset($_SESSION['langId']))
	{
	   $langId = $_SESSION['langId'];
	}
	else if(isset($_COOKIE['langId']))
	{
	   $langId = $_COOKIE['langId'];
	}
	else
	{
	   $langId = 'fr';
	}
	if(isset($_SESSION['member']))
	{
		$member = $_SESSION['member'];
	}
	else 
	{
		$member = null;
	}
	require 'lang/messages.php';
?>

