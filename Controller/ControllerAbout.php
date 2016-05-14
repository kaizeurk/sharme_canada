<?php

require_once 'Framework/View.php';
require_once 'Framework/Controller.php';

/**
 * Contrôleur de la page d'accueil
 * 
 * @author Baptiste Pesquet
 */
class ControllerAbout extends Controller {

    private $record;
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'about';
    
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
