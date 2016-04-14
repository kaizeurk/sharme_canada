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
	const ERROR_MSG = -1;
	const GOD_MSG   = 1;
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
                $this->generateErrorView(array('msgErreurCPwd' =>'', 'msgErreur' => 'Membre inconnu'),"index");
            }
        }
        else
        {
        	$this->generateErrorView(array('msgErreur' => 'Action impossible : courriel ou mot de passe non défin'),"index",false);        	
           // throw new Exception("Action impossible : courriel ou mot de passe non défini");
        }
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
            $address = ($this->request->existParameter("address"))?$this->request->getParameter("address"):null;
            $town = ($this->request->existParameter("ville"))?$this->request->getParameter("ville"):null;
            $codepostal = ($this->request->existParameter("codePostal"))?$this->request->getParameter("codePostal"):null;
            $email = $this->request->getParameter("courriel");
            $mdp = $this->request->getParameter("mdp");

            $this->member->addMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp);
            $this->accueillirMember($email, $mdp);
        }
        else
        {
        	$this->generateErrorView(array('msgBad' =>'', ),"signup");
        }
        	
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
        $this->request->getSession()->setAttribut("role", "MEMBER");
        $this->redirect("accueil");
    }
    
    /**
     * Ici que l'on gere le le reset pwd
     * @throws Exception
     */
    public function resetpwd()
    {
        if ($this->request->existParameter("courriel")) 
        {
            $email = $this->request->getParameter("courriel");

            if($this->member->memberExist($email))
            {
            	# Set mail values
            	$code = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            	$message = "Vous &ecirc;tes sur le point de remplacer le mot de passe que vous avez oubli&eacute; par un nouveau. Pour ce faire, vous aurez besoin de fournir le code &agrave; six (06) chiffres ci-dessous.
            		<br><br><br><center>" . $code . "</center>";
            	$subject = "Changement du mot de passe oublié.";
            	$this->request->getSession()->setAttribut("email", $email);
            	$this->request->getSession()->setAttribut("code", $code);
            	$headers = 'From: no_reply@sharmecanada.org' . "\r\n" .
            			'Reply-To: no_reply@sharmecanada.org' . "\r\n" .
            			'X-Mailer: PHP/' . phpversion();
            	
            	# Sending mail
            	self::mail_utf8($email, $subject, $message, $headers);
            	
                $this->generateErrorView(array('msgGod' =>self::GOD_MSG, ),"index");
            }
            else 
            {
                $this->generateErrorView(array('msgBad' =>self::ERROR_MSG, ),"index");
            }
        }
        else
        {
        	$this->generateErrorView(array('msgBad' =>self::ERROR_MSG, ),"index");
        }
            //throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }
    
    /**
     * Ici l'on change le pwd
     * @throws Exception
     */
    public function changepwd()
    {
    	if ($this->request->existParameter("mdp") && 
    		$this->request->existParameter("mdp1") &&
    		$this->request->existParameter("codeReset"))
    	{
    		$mdp = $this->request->getParameter("mdp");
    		$mdp1 = $this->request->getParameter("mdp1");
    		$code = $this->request->getParameter("codeReset");
    
    		if($mdp == $mdp1 && $code == $this->request->getSession()->getAttribut("code"))
    		{
    			$email = $this->request->getSession()->getAttribut("email");
    			$this->request->getSession()->destroy();
    			
    			# Mise à jour
    			$this->member->updateForgottenPassword($email, $mdp);
    			
    			$this->accueillirMember($email, $mdp);
    		}
    		else
    		{
    			$this->generateErrorView(array('msgBad' =>self::ERROR_MSG, ),"index");
    		}
    	}
    	else
    	{
    		$this->generateErrorView(array('msgBad' =>self::ERROR_MSG, ),"index");
    	}
    }
    
    
    
    private function mail_utf8($email, $subject , $message , $headers)
    {
		$header_ = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/plain; charset=UTF-8' . "\r\n";
    	mail($email, '=?UTF-8?B?' . base64_encode($subject) . '?=', $message, $header_ . $headers);
    }
    

}
