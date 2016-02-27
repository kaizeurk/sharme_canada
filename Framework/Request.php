<?php
require_once 'Session.php';

/**
 * Classe modélisant une requête HTTP entrante.
 * 
 * @author Baptiste Pesquet
 */
class Request
{
    /** Tableau des paramètres de la requête */
    private $parameters;

    /** Objet session associé à la requête */
    private $session;

    /**
     * Constructeur
     * 
     * @param array $parameters Paramètres de la requête
     */
    public function __construct($parameters)
    {
        $this->parameters = $parameters;
        $this->session = new Session();
    }

    /**
     * Renvoie l'objet session associé à la requête
     * 
     * @return Session Objet session
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Renvoie vrai si le paramètre exist dans la requête
     * 
     * @param string $nom Nom du paramètre
     * @return bool Vrai si le paramètre exist et sa valeur n'est pas vide 
     */
    public function existParameter($nom)
    {
        return (isset($this->parameters[$nom]) && $this->parameters[$nom] != "");
    }

    /**
     * Renvoie la valeur du paramètre demandé
     * 
     * @param string $nom Nom d paramètre
     * @return string Valeur du paramètre
     * @throws Exception Si le paramètre n'exist pas dans la requête
     */
    public function getParameter($nom)
    {
        if ($this->existParameter($nom)) {
            return $this->parameters[$nom];
        }
        else {
            throw new Exception("Paramètre '$nom' absent de la requête");
        }
    }

}

