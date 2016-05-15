<?php

require_once 'Framework/View.php';
require_once 'Framework/Controller.php';

/**
 * Contrôleur de la page d'accueil
 * 
 * @author Baptiste Pesquet
 */
class ControllerLegalnotice extends Controller {

    private $record;
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'legalnotice';
    
    public function __construct() 
    {
    	
    }
    
    /**
     * Affiche la page d'accueil
     */
    public function index() 
    {
        $this->generateView();
    }

}
