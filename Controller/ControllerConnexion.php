<?php
require_once 'Framework/Controller.php';
require_once 'Model/person/Member.php';


/**
 * Contrôleur gérant la connexion au site
 *
 * @author Baptiste Pesquet
 */
class ControllerConnexion extends Controller
{
    /**
     * 
     * @var Member
     */
	private $member;

    public function __construct()
    {
        $this->member = new Member();
    }

    public function index()
    {
        $this->generateView();
    }

    public function connecter()
    {
    true;
       xdebug_break();
    	if ($this->request->existParameter("courriel") && $this->request->existParameter("mdp")) 
    	{
            $courriel = $this->request->getParameter("courriel");
            $mdp = $this->request->getParameter("mdp");
            
            if ($this->member->connecter($courriel, $mdp)) {
                $this->accueillirMember($courriel, $mdp);
            }
            else
            {
                $this->generateView(array('msgErreur' => 'Member inconnu'),"index");
            }
        }
        else
            throw new Exception("Action impossible : courriel ou mot de passe non défini");
    }

    /**
     * 
     */
    public function disconnect()
    {
    	$this->request->getSession()->destroy();
    	$this->redirect("");
    }
    
    /**
     * 
     */
    public function signup()
    {
       $this->generateView();
    }

    public function inscrire()
    {
        if ($this->request->existParameter("nom") && $this->request->existParameter("prenom") &&
                $this->request->existParameter("address") && $this->request->existParameter("courriel") &&
                $this->request->existParameter("mdp")) 
        {
            $nom = $this->request->getParameter("nom");
            $prenom = $this->request->getParameter("prenom");
            $address = $this->request->getParameter("address");
            $courriel = $this->request->getParameter("courriel");
            $mdp = $this->request->getParameter("mdp");

            $this->member->addMember($nom, $prenom, $address, $courriel, $mdp);
            $this->accueillirMember($courriel, $mdp);
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    /**
     * Enregistre un member connecté dans la session et redirige vers la page d'accueil
     * 
     * @param type $courriel
     * @param type $mdp
     */
    private function accueillirMember($courriel, $mdp)
    {
        $member = $this->member->getMember($courriel, $mdp);
        $this->request->getSession()->setAttribut("member", $member);
        $this->redirect("accueil");
    }

}
