<?php
require_once 'Framework/Controller.php';
require_once 'Controller/ControllerSecurise.php';
require_once 'Model/person/Member.php';

/**
 * Contrôleur des actions liées au member
 * 
 * @author kaizeurk
 */
class ControllerMember extends ControllerSecurise
{
    
    /**
     * 
     * @var string
     */
    const CONTROLLER_NAME = 'member';
    /**
     * 
     * @var Member
     */
	private $member;

    public function __construct()
    {
        $this->member = new Member();
    }

    /**
     * Affiche la page de modification des infos member
     */
    public function index()
    {
        $this->generateView();
    }
    
    /**
     * Affiche la page d'accueil de l'espace membre
     */
    public function memberspace()
    {
    	$this->generateView();
    }

    /**
     * Modifie les infos member
     * 
     * @throws Exception S'il manque des infos members
     */
    public function setdata()
    {
        if ($this->request->existParameter("nom") && 
            $this->request->existParameter("prenom") &&
        	$this->request->existParameter("courriel") &&
            $this->request->existParameter("mdp")) 
        {
            $lastname = $this->request->getParameter("nom");
            $firstname = $this->request->getParameter("prenom");
            $address = ($this->request->existParameter("address"))?$this->request->getParameter("address"):null;
            $town = ($this->request->existParameter("ville"))?$this->request->getParameter("ville"):null;
            $codepostal = ($this->request->existParameter("codePostal"))?$this->request->getParameter("codePostal"):null;
            $email = $this->request->getParameter("courriel");
            $mdp = $this->request->getParameter("mdp");

            $member = $this->request->getSession()->getAttribut("member");
            $idMember = $member['idMember'];
            $this->member->setdataMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp, $idMember);
            
            $member = $this->member->getMemberbyId($idMember);
            $this->request->getSession()->setAttribut("member", $member);
            $this->generateView();
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

}
