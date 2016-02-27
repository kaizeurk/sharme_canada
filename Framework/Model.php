<?php
require_once 'DbConnect.php';

/**
 * Classe abstraite modèle.
 * Centralise les services d'accès à une base de données.
 * Utilise l'API PDO de PHP.
 *
 * @author Baptiste Pesquet
 */
abstract class Model
{
	
    /** Objet PDO d'accès à la BD 
      Statique donc partagé par toutes les instances des classes dérivées */
    private static $bdd;
    /**
     * 
     * @var unknown
     */
    public $record;

    /**
     * Exécute une requête SQL
     * 
     * @param string $sql Requête SQL
     * @param array $params Paramètres de la requête
     * @return PDOStatement Résultats de la requête
     */
    protected function executeRequest($sql, $params = null)
    {
        if ($params == null) {
            $resultat = self::getBdd()->query($sql);   // exécution directe
        }
        else {
            $resultat = self::getBdd()->prepare($sql); // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    /**
     * Renvoie un objet de connexion à la BDD en initialisant la connexion au besoin
     * 
     * @return PDO Objet PDO de connexion à la BDD
     */
    private static function getBdd()
    {
        if (self::$bdd === null) {
            // Récupération des paramètres de configuration BD
            $dsn = DbConnect::get("dsn");
            $login = DbConnect::get("login");
            $mdp = DbConnect::get("mdp");
            // Création de la connexion
            self::$bdd = new PDO($dsn, $login, $mdp,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }

}
