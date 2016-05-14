<?php

require_once 'Framework/View.php';
require_once 'Framework/Controller.php';

/**
 * Contrôleur de la page d'accueil
 * 
 * @author Baptiste Pesquet
 */
class ControllerContact extends Controller 
{
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'contact';

    private $record;
    
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
