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

    private $sql = "select MEMBER_ID as id, LASTNAME as lastname, FIRSTNAME as firstname, ADRESSE as adresse, EMAIL as email, PASSWORD as password
            from T_MEMBER";
	
	const STATUS_ACTIVE = 1;			# Member is active.
	const STATUS_INACTIVE = 2;			# Member is inactive.

	#################
	# CTORS / DTORS #----------------------------------------------------------
	#################

	# Default constructor.
	public function __construct()
	{
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
     * Vérifie q'un member exist dans la BD
     * 
     * @param type $courriel
     * @param type $mdp
     * @return type
     */
    public function connecter($courriel, $mdp)
    {
        $sql = "select MEMBER-ID from T_MEMBER where EMAIL=? and PASSWORD=?";
        $member = $this->executeRequest($sql, array($courriel, $mdp));
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
        if ($member->rowCount() == 1)
            return $member->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun member ne correspond aux identifiants fournis");
    }

    /**
     * Renvoie les infos sur un member
     * 
     * @param type $idClient
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
            throw new Exception("Aucun member ne correspond 0 l4identifiqnt fourni");
    }

    /**
     * Ajoute un nouveau member
     * 
     * @param type $nom
     * @param type $prenom
     * @param type $adresse
     * @param type $courriel
     * @param type $mdp
     */
    public function addMember($nom, $prenom, $adresse, $courriel, $mdp)
    {
        $sql = "insert into T_MEMBER(LASTNAME, FIRSTNAME, ADRESSE, EMAIL, PASSWORD)
            values (?, ?, ?, ?, ?, ?, ?)";
        $this->executeRequest($sql,
                array($nom, $prenom, $adresse, $courriel, $mdp));
    }

    /**
     * Modifie un member existant
     * 
     * @param type $idClient
     * @param type $nom
     * @param type $prenom
     * @param type $adresse
     * @param type $codePostal
     * @param type $ville
     * @param type $courriel
     * @param type $mdp
     */
    public function setdataMember($id, $nom, $prenom, $adresse, $courriel, $mdp)
    {
        $sql = "update T_MEMBER set LASTNAME=?, FIRSTNAME=?, ADRESSE=?, EMAIL=?,PASSWORD=? where MEMBER_ID=?";
        $this->executeRequest($sql,
                array($nom, $prenom, $adresse, $courriel, $mdp, $idClient));
    }
}

?>