<?php

// Contrôleur frontal : instancie un router pour traiter la requête entrante

require 'Framework/Router.php';
//xdebug_start_trace(null,XDEBUG_TRACE_APPEND);
xdebug_break();
$router = new Router();
$router->routerRequest();
//xdebug_stop_trace();

