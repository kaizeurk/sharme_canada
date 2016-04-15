<?php
###############################################################################
# 		Membre.php													          #
###############################################################################
#	Defines a member in the database.							              #
###############################################################################

require_once 'Framework/Model.php';

class Member extends Model	 
{
	##############
	# ATTRIBUTES #-------------------------------------------------------------
	##############
	/**
	 * 
	 * @var integer
	 */
	private $id;						# Database id.
	
	/**
	 * 
	 * @var string
	 */
	private $lastName;					# Member's last name.

	/**
	 *
	 * @var string
	 */
	private $firstName;					# Member's first name.

	/**
	 *
	 * @var string
	 */
	private $address;					# Member's Address.

	/**
	 *
	 * @var string
	 */
	private $town;   					# Member's town.
	
	/**
	 *
	 * @var string
	 */
	private $postalCode;     			# Member's Postal Code.

	/**
	 *
	 * @var string
	 */
	private $phoneNumber;				# Member phone number.

	/**
	 *
	 * @var string
	 */
	private $emailMembername;			# Member email Membername.

	/**
	 *
	 * @var string
	 */
	private $password;					# Member password.

	/**
	 *
	 * @var \Model\person\MemberType
	 */
	private $memberType;				# Member Type (Admin, Standard, ...).

	/**
	 *
	 * @var string
	 */
	private $company;					# Member's company.

	/**
	 *
	 * @var string
	 */
	private $title;						# Title (M., Mme, ...)

	/**
	 *
	 * @var integer
	 */
	private $status;					# Member's status.
    
	/**
	 * SQL request to get member
	 * @var String 
	 */
    private $sql = "select MEMBER_ID as id, LASTNAME as lastname, FIRSTNAME as firstname,TOWN town, CODE_POSTAL, ADDRESS as address, EMAIL as email, PASSWORD as password
            from T_MEMBER";
	
	const STATUS_ACTIVE = 1;			# Member is active.
	const STATUS_INACTIVE = 2;			# Member is inactive.

	#################
	# CTORS / DTORS #----------------------------------------------------------
	#################

	# Default constructor.
	public function __construct()
	{
	   $this->setTableDef();
	   $this->setPrimaryKey();
	   $this->setFieldsList();
	   $this->setMandatoryFields();
	}

	###########
	# METHODS #----------------------------------------------------------------
	###########
	
	
	##############
	# PROPERTIES #-------------------------------------------------------------
	##############
	
	/**
	 * 
	 */
	public function getID()
	{
		return $this->id;
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setID($value)
	{
		$this->id = $value != "" ? $value : null;
	}
	
	/**
	 * 
	 */
	public function getLastName()
	{
		return $this->lastName;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setLastName($value)
	{
		$this->lastName = $value != "" ? $value : null;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setFirstName($value)
	{
		$this->firstName = $value != "" ? $value : null;
	}
	
	/**
	 * 
	 */
	public function getCompany()
	{
		return $this->company;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setCompany($value)
	{
		$this->company = $value != "" ? $value : null;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setAddress($value)
	{
		$this->address = $value;
	}
	
	/**
	 * @return integer
	 */
	public function getAddressID()
	{
		return $this->address->getID();
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setAddressID($value)
	{
		$address = new Address();
		$address->setID($value);
		$this->setAddress($address);
	}
	
	/**
	 * 
	 * @return number
	 */
	public function getStatus()
	{
		return $this->status;
	}
	
	/**
	 * 
	 * @param integer $value
	 */
	public function setStatus($value)
	{
		$this->status = $value;
	}
	
	/**
	 * 
	 */
	public function getStatusID()
	{
		return $this->status->getID();
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setStatusID($value)
	{
		$status = new Status();
		$status->setID($value);
		$this->status = $status;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailMembername()
	{
		return $this->emailMembername;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setEmailMembername($value)
	{
		$this->emailMembername = $value != "" ? $value : null;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setPassword($value)
	{
		$this->password = $value != "" ? $value : null;
	}
	
	/**
	 * 
	 * @return \Model\person\MemberType
	 */
	public function getMemberType()
	{
		return $this->memberType;
	}
	
	/**
	 * 
	 * @param MemberType $value
	 */
	public function setMemberType($value)
	{
		$this->memberType = $value;
	}
	
	/**
	 * 
	 */
	public function getMemberTypeID()
	{
		return $this->memberType->getID();
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setMemberTypeID($value)
	{
		$memberType = new MemberType();
		$memberType->setID($value);
		$this->memberType = $memberType;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setPhoneNumber($value)
	{
		$this->phoneNumber = $value;
	}
	
	/**
	 * 
	 */
	public function getTitle()
	{
		return $this->title;
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setTitle($value)
	{
		$this->title = $value;
	}
	
	/**
	 * 
	 */
	public function getTitleID()
	{
		return $this->title->getID();
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setTitleID($value)
	{
		$title = new Title();
		$title->setID($value);
		$this->title = $title;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTown()
	{
		return $this->town;
	}
	
	/**
	 * 
	 * @param string $value
	 */
	public function setTown($value)
	{
		$this->town = $value;
	}
	
	/**
	 * 
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}
	
	/**
	 * 
	 * @param unknown $value
	 */
	public function setPostalCode($value)
	{
		$this->postalCode = $value;
	}

    /**
     * Vérifie q'un member exist dans la BD
     * 
     * @param type $courriel
     * @param type $mdp
     * @return type
     */
    public function connecter($courriel, $mdp)
    {
        $sql = "select MEMBER_ID from T_MEMBER where EMAIL=? and PASSWORD=?";
        $member = $this->executeRequest($sql, array($courriel, $mdp));
        return ($member->rowCount() == 1);
    }

    /**
     * Vérifie q'un member exist dans la BD
     * 
     * @param type $courriel
     * @return type
     */
    public function memberExist($courriel)
    {
        $sql = "select MEMBER_ID from T_MEMBER where EMAIL=?";
        $member = $this->executeRequest($sql, array($courriel));
        return ($member->rowCount() == 1);
    }

    /**
     * Renvoie les infos sur un member
     * 
     * @param type $courriel
     * @param type $mdp
     * @return type
     * @throws Exception
     */
    public function getMember($courriel, $mdp)
    {
        $sql = $this->sql . " where EMAIL=? and PASSWORD=?";
        $member = $this->executeRequest($sql, array($courriel, $mdp));
        if ($member->rowCount() >= 1)
            return $member->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun member ne correspond aux identifiants fournis");
    }

    /**
     * Renvoie les infos sur un member
     * 
     * @param type $id
     * @return type
     * @throws Exception
     */
    public function getMemberById($id)
    {
        $sql = $this->sql . " where MEMBER_ID=?";
        $member = $this->executeRequest($sql, array($id));
        if ($member->rowCount() == 1)
            return $member->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun member ne correspond 0 l'identifiant fourni");
    }

    /**
     * Ajoute un nouveau member
     * 
     * @param unknown $lastname
     * @param unknown $firstname
     * @param unknown $address
     * @param unknown $town
     * @param unknown $codepostal
     * @param unknown $email
     * @param unknown $mdp
     */
    public function addMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp)
    {
    	$this->initMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp);
        $sql = "insert into T_MEMBER(LASTNAME, FIRSTNAME, ADDRESS,TOWN,CODE_POSTAL, EMAIL, PASSWORD)
            values (?, ?, ?, ?, ?, ?, ?)";
        $this->executeRequest($sql,
                array($this->getLastName(), $this->getFirstName(), $this->getAddress(),$this->getTown(),$this->getPostalCode(), $this->getEmailMembername(), $this->getPassword()));
    }

    /**
     * Modifie un member existant
     * 
     * @param string  $lastname
     * @param string  $firstname
     * @param string  $address
     * @param string  $town
     * @param string  $codepostal
     * @param string  $email
     * @param string  $mdp
     * @param integer $id
     */
    public function setdataMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp, $id)
    {
    	$this->initMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp);
        $sql = "update T_MEMBER set LASTNAME=?, FIRSTNAME=?, ADDRESS=?,TOWN=?, CODE_POSTAL=?, EMAIL=?,PASSWORD=? where MEMBER_ID=?";
        $this->executeRequest($sql,
                array($this->getLastName(), $this->getFirstName(), $this->getAddress(),$this->getTown(),$this->getPostalCode(), $this->getEmailMembername(), $this->getPassword(), $id));
    }
    
    /**
     * 
     * @param unknown $lastname
     * @param unknown $firstname
     * @param unknown $address
     * @param unknown $town
     * @param unknown $codepostal
     * @param unknown $email
     * @param unknown $mdp
     */
    private function initMember($lastname, $firstname, $address, $town, $codepostal, $email, $mdp)
    {
    	$this->setLastName($lastname);
    	$this->setFirstName($firstname);
    	$this->setAddress($address);
    	$this->setTown($town);
    	$this->setPostalCode($codepostal);
    	$this->setEmailMembername($email);
    	//a faire pour convertir ou encoder
    	$this->setPassword($mdp);
    }
    
    /**
     * 
     * @see Model::getTableDef()
     */
    public function getTableDef()
    {
       return $this->tableDef;
    }

    /**
     *
     * @see Model::getTableDef()
     */
    protected function setTableDef()
    {
    	$this->tableDef = "T_MEMBER";
    }
    
    /**
     * 
     * @see Model::getMandatoryFields()
     */
    public function getMandatoryFields()
    {
    	return $this->mandatoryFields;
    }
    
    /**
     * 
     * @see Model::getPrimaryKey()
     */
    public function getPrimaryKey()
    {
    	return $this->primaryKeys;
    }

    /**
     *
     * @see Model::getPrimaryKey()
     */
    protected  function setPrimaryKey()
    {
    	$this->primaryKeys = "MEMBER_ID";
    }
    
    /**
     * 
     * @see Model::getFieldsList()
     */
    public function getFieldsList()
    {
    	return $this->fieldsList;
    }
    
    /**
     * 
     * @see Model::setFieldsList()
     */
    protected function setFieldsList()
    {
    	$this->fieldsList[] = "MEMBER_ID";
    	$this->fieldsList[] = "FIRSTNAME";
    	$this->fieldsList[] = "LASTNAME";
    	$this->fieldsList[] = "ADDRESS";
    	$this->fieldsList[] = "CODE_POSTAL";
    	$this->fieldsList[] = "TOWN";
    	$this->fieldsList[] = "PHONE_NUMBER";
    	$this->fieldsList[] = "EMAIL";
    	$this->fieldsList[] = "PASSWORD";
    	$this->fieldsList[] = "CODE_POSTAL";
    }
    
    /**
     * 
     * @see Model::setMandatoryFields()
     */
    protected function setMandatoryFields()
    {
	   $this->mandatoryFields[] = "EMAIL";
	   $this->mandatoryFields[] = "PASSWORD";
	   $this->mandatoryFields[] = "CODE_POSTAL";
    	
    }
    
    public function updateForgottenPassword($email, $mdp)
    {
    	$this->setPassword($mdp);
    	$sql = "update T_MEMBER set PASSWORD=? where EMAIL=?";
    	$this->executeRequest($sql, array($mdp, $email));
    }
    
    public function install()
    {
       $sql = 	"DROP DATABASE IF EXISTS db_sharme";
       $this->executeRequest($sql);
       $sql = 	"CREATE DATABASE db_sharme";
       $this->executeRequest($sql);
       
       $sql = 	
       "CREATE TABLE IF NOT EXISTS `T_MEMBER` (
       `MEMBER_ID` int(11) NOT NULL,
       `FIRSTNAME` varchar(100) NOT NULL,
       `LASTNAME` varchar(100) NOT NULL,
       `ADDRESS` varchar(200) DEFAULT NULL,
       `CODE_POSTAL` varchar(20) DEFAULT NULL,
       `TOWN` varchar(200) DEFAULT NULL,
       `PASSWORD` varchar(225) DEFAULT NULL,
       `PHONE_NUMBER` varchar(20) DEFAULT NULL,
       `EMAIL` varchar(100) NOT NULL ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8";
       $this->executeRequest($sql);
       $sql = 	"
           ALTER TABLE `T_MEMBER`
             ADD PRIMARY KEY (`MEMBER_ID`),
             ADD UNIQUE KEY `EMAIL` (`EMAIL`)";
       $this->executeRequest($sql);
       $sql = 	"
          ALTER TABLE `T_MEMBER`
          MODIFY `MEMBER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4";
       $this->executeRequest($sql);
       $sql = 	"
         INSERT INTO `T_MEMBER` (`MEMBER_ID`, `FIRSTNAME`, `LASTNAME`, `ADDRESS`, `CODE_POSTAL`, `TOWN`, `PASSWORD`, `PHONE_NUMBER`, `EMAIL`) VALUES
         (1, 'sharme', 'canada', '123 rue produits produit des champs', 'x8r 9s8', 'ville de montagne', '123456', '123-456-7890', 'sharme@gmail.com'),
         (2, 'admin', 'admin', '123 rue produits produit des champs', 'x8r 9s8', 'ville de montagne', '123456', '123-456-7890', 'admin@admin.org'),
         (3, 'sozer', 'kaizeurk', NULL, NULL, NULL, '123456', NULL, 'kaizeurk@gmail.com')";
       $this->executeRequest($sql);
    }
}

?>