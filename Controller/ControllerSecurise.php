<?php
require_once 'ControllerPersonnalise.php';

/**
 * Contrôleur abstrait pour les actions soumises à authentification du client
 * 
 * @author Baptiste Pesquet
 */
abstract class ControllerSecurise extends ControllerPersonnalise
{
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'securise';

    /**
     * Redéfinition permettant de vérifier qu'un client est connecté
     * 
     * @param type $action
     */
    public function executeAction($action)
    {
        // Si les infos client sont présentes dans la session ...
        if ($this->request->getSession()->existAttribut("member")) {
            // ... l'action s'exécute normalement ...
            parent::executeAction($action);
        }
        else {
            // ... ou l'utilisateur est redirigé vers la page de connexion
            $this->redirect("connexion");
        }
    }

}