<?php
require_once 'Framework/Controller.php';
require_once 'Controller/ControllerSecurise.php';
require_once 'Model/person/Member.php';

/**
 * Contrôleur des actions liées au membre
 * 
 * @author kaizeurk
 */
class ControllerMember extends ControllerSecurise
{
    /**
     * 
     * @var Member
     */
	private $membre;

    public function __construct()
    {
        $this->membre = new Member();
    }

    /**
     * Affiche la page de modification des infos membre
     */
    public function index()
    {
        $this->generateView();
    }

    /**
     * Modifie les infos membre
     * 
     * @throws Exception S'il manque des infos membres
     */
    public function setdata()
    {
        if ($this->request->existParameter("nom") && $this->request->existParameter("prenom") &&
                $this->request->existParameter("adresse") && $this->request->existParameter("courriel") &&
                $this->request->existParameter("mdp")) 
        {
            $nom = $this->request->getParameter("nom");
            $prenom = $this->request->getParameter("prenom");
            $adresse = $this->request->getParameter("adresse");
            $courriel = $this->request->getParameter("courriel");
            $mdp = $this->request->getParameter("mdp");

            $membre = $this->request->getSession()->getAttribut("membre");
            $idMember = $membre['idMember'];
            $this->membre->setdataMember($idMember, $nom, $prenom, $adresse, $courriel, $mdp);
            
            $membre = $this->membre->getMemberbyId($idMember);
            $this->request->getSession()->setAttribut("membre", $membre);
            $this->generateView();
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

}
