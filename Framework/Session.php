<?php
/**
 * Classe modélisant la session.
 * Encapsule la superglobale PHP $_SESSION.
 * 
 * @author Baptiste Pesquet
 */
class Session
{

    /**
     * Constructeur.
     * Démarre ou restaure la session
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Détruit la session actuelle
     */
    public function destroy()
    {
        session_destroy();
    }

    /**
     * Ajoute un attribut à la session
     * 
     * @param string $nom Nom de l'attribut
     * @param string $valeur Valeur de l'attribut
     */
    public function setAttribut($nom, $valeur)
    {
        $_SESSION[$nom] = $valeur;
    }

    /**
     * Renvoie vrai si l'attribut exist dans la session
     * 
     * @param string $nom Nom de l'attribut
     * @return bool Vrai si l'attribut exist et sa valeur n'est pas vide 
     */
    public function existAttribut($nom)
    {
        return (isset($_SESSION[$nom]) && $_SESSION[$nom] != "");
    }

    /**
     * Renvoie la valeur de l'attribut demandé
     * 
     * @param string $nom Nom de l'attribut
     * @return string Valeur de l'attribut
     * @throws Exception Si l'attribut n'exist pas dans la session
     */
    public function getAttribut($nom)
    {
        if ($this->existAttribut($nom)) {
            return $_SESSION[$nom];
        }
        else {
            throw new Exception("Attribut '$nom' absent de la session");
        }
    }

}