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
    
    /**
     * 
     * @throws Exception
     */
    public function inscrire()
    {
        if ($this->request->existParameter("nom") && 
        		$this->request->existParameter("prenom") &&
        		$this->request->existParameter("courriel") &&
                $this->request->existParameter("mdp")) 
        {
            $lastname = $this->request->getParameter("nom");
            $firstname = $this->request->getParameter("prenom");
            $address = ($this->request->getParameter("address")!==null)?$this->request->getParameter("address"):null;
            $town = ($this->request->getParameter("ville")!==null)?$this->request->getParameter("ville"):null;
            $codepostal = ($this->request->getParameter("codePostal")!==null)?$this->request->getParameter("codePostal"):null;
            $email = $this->request->getParameter("courriel");
            $mdp = $this->request->getParameter("mdp");

            $this->member->addMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp);
            $this->accueillirMember($email, $mdp);
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
