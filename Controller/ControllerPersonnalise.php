<?php
require_once 'Framework/Controller.php';

/**
 * Contrôleur abstrait pour les views devant afficher les infos member
 * 
 * @author Baptiste Pesquet
 */
abstract class ControllerPersonnalise extends Controller
{
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'personnalise';
    
    /**
     * Redéfinition permettant d'ajouter les infos members aux données des views 
     * 
     * @param type $donneesView Données dynamiques
     * @param type $action Action associée à la view
     */
    protected function generateView($donneesView = array(), $action = null, $paramAction = true)
    {
        $member = null;
        $nbArticlesPanier = 0;
        // Si les infos member sont présente dans la session...
        if ($this->request->getSession()->existAttribut("member")) 
        {
            // ... on les récupère ...
            $member = $this->request->getSession()->getAttribut("member");
            
        }
        // ... et on les ajoute aux données de la view
        parent::generateView($donneesView + array('member' => $member), $action,true);
    }

}