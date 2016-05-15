<?php
//     $dirWayName = str_replace("View/_Commun", "Controller", $dirWayName);
//     $monController = new ReflectionClass($dirWayName."/ControllerAbout.php");
//     $variable = constant($monController::CONTROLLER_NAME); 
    $cssContain  = "";
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />';
    
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/animate.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/superslides.css" rel="stylesheet" type="text/css" />';
    
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/essentials.css" rel="stylesheet" type="text/css" />';
    
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/layout.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/orange.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->';
    
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />';
    $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/red.css" rel="alternate stylesheet" type="text/css" title="red" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/darkgreen.css" rel="alternate stylesheet" type="text/css" title="darkgreen" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/green.css" rel="alternate stylesheet" type="text/css" title="green" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/darkblue.css" rel="alternate stylesheet" type="text/css" title="darkblue" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/brown.css" rel="alternate stylesheet" type="text/css" title="brown" />';
  	
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/color_scheme/lightgrey.css" rel="alternate stylesheet" type="text/css" title="lightgrey" />';
	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css" />	';	
    $controlloresActive = array("accueil"    =>"",
    		                    "about"      =>"",
    		                    "connexion"  =>"",
    		                    "contact"    =>"",
    		                    "member"     =>"",
    		                    "blog"       =>"",
    		                    "legalnotice"=>"",
    		                    "activity"   =>"");
    if(isset($this->controller))
    {
    	$controlloresActive[strtolower($this->controller)] = "active";
    	if(strtolower($this->controller) == strtolower('accueil'))
    	{
		  $cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/plugins/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />';

    	}
    	elseif (strtolower($this->controller) == strtolower('about'))
    	{

    	}
    	elseif (strtolower($this->controller) ==  strtolower('connexion'))
    	{
    		
    	}
    	elseif (strtolower($this->controller) ==  strtolower('contact'))
    	{

    	}
    	elseif (strtolower($this->controller) ==  strtolower('member'))
    	{
    	}
    	elseif (strtolower($this->controller) ==  strtolower("activity"))
    	{
    	  	$cssContain .= '<link href="'.$racineWebFront.'Contenu/assets/css/blog.css" rel="stylesheet" type="text/css" />';
    	}
    	else 
    	{
    	}
    	echo  $cssContain;
    }

?>
