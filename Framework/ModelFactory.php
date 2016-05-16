<?php
require_once 'DbConnect.php';

/**
 * Centralise les services d'accès à une base de données.
 * Utilise l'API PDO de PHP.
 *
 * @author kaizeurk
 */
class ModelFactory
{
	
    /** Objet PDO d'accès à la BD 
     * Statique donc partagé par toutes les instances des classes dérivées 
     * @var string
     */
    private static $bdd;
    
    /**
     * 
     * @var Model
     */
    public $record;

    /**
     *
     * @var array $recordFields
     */
    private $recordFields;
    
    /**
     * 
     * @param Model $model
     */
    public function __construct($model = null)
    {
    	$this->record = $model;
    }

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
     * 
     * @param array $fields
     * @throws Exception
     */
    public function getRecord(array $fields = null)
    {
    	try 
    	{
    	   	/* @var $fieldsInModel Model */
    		$fieldsInModel = $this->record->getFieldsList();
            $sql =  'SELECT ';
    		if(!isset($fieldsInModel))
    		{
    			throw new Exception('Cannot fill empty Models'.$this->record->getTableDef());
    		}
    		
    		if(!isset($fields))
    	   	{
    	   		throw new Exception('Cannot find empty property in '.__FUNCTION__.' in '.$this->record->getTableDef()); 
    	   	}
    	   	
    	   	foreach ($fields as $field)
    	   	{
    	   		if(!in_array($field, $fieldsInModel))
    	   		{
    			   throw new Exception('This field '.$field.' do not exist in '.$this->record->getTableDef());
    	   		}
    	   		else
    	   		{
    	   			if(end($fields) === $field)
    	   			{
         	   			$sql .= $field.' ';
    	   				
    	   			}
    	   			else 
    	   			{
         	   			$sql .= $field.', ';
    	   			}
    	   		}
    	   	}
    	   	$sql .= ' from '.$this->record->getTableDef();
    	} 
    	catch (Exception $e) 
    	{
    		echo 'Exception reçue : ',  $e->getMessage(), "\n"; 
    	}
    }
    
    public function  updateRecord()
    {
    	
    }
    
    public function insertRecord()
    {
    	
    }
    
    public function findModelBy()
    {
    	
    }

    public function findModelById( $id = null )
    {
    	 
    }

    public function deleteRecord( $id = null )
    {
    
    }
}
