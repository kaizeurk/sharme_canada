<?php 
    /* set session langId */
    if(isset($_SESSION['langId']))
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
	
	/* set member session */
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

