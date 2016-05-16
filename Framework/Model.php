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
     * Statique donc partagé par toutes les instances des classes dérivées 
     * @var string
     */
    private static $bdd;
    
    /**
     * 
     * @var string
     */
    protected $tableDef;
    
    /**
     * this contains all mandatory needed to fetch correcte data in database
     * @var array
     */
    protected $mandatoryFields;
    
    /**
     * this is to get only one record in database
     * @var string
     */
    protected $primaryKeys;
    
    /**
     * contains all fields of table
     * @var array
     */
    protected $fieldsList;
    
    /**
     * 
     * @var stdClass
     */
    public $record;

    /**
     * Exécute une requête SQL
     * 
     * @param  string $sql Requête SQL
     * @param  array $params Paramètres de la requête
     * @return PDOStatement Résultats de la requête
     */
    protected function executeRequest($sql, $params = null)
    {
        if ($params == null) 
        {
            $resultat = self::getBdd()->query($sql);   // exécution directe
        }
        else 
        {
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
            $dsn   = DbConnect::get("dsn");
            $login = DbConnect::get("login");
            $mdp   = DbConnect::get("mdp");
            
            // Création de la connexion
            self::$bdd = new PDO($dsn, $login, $mdp,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }
    
    /**
     * this return de name of table to in database
     * @return string $tableDef
     */
    abstract public function getTableDef();
    
    /**
     * this return de name of table to in database
     */
    abstract protected function setTableDef();
    
    /**
     * this is to get all mandatorory fields needed
     * @return array
     */
    abstract public function getMandatoryFields();
    
    /**
     * 
     * @return string $primaryKey
     */
    abstract public function getPrimaryKey();
    
    /**
     * 
     * @return string $primaryKey
     */
    abstract protected  function setPrimaryKey();
    
    /**
     * 
     * @return string $fieldsList
     */
    abstract public function getFieldsList();
    
    /**
     * 
     */
    abstract protected function setFieldsList();

    /**
     *
     */
    abstract protected function setMandatoryFields();
    
    /**
     * @return Model
     */
    public function getRecord()
    {
    	
    }
    
    

}
