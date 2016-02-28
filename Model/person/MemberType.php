<?php
###############################################################################
# 		MemberType.php														  #
###############################################################################
#	Defines a member type in the database.									  #
###############################################################################
namespace Model\person;

class MemberType
{
	##############
	# ATTRIBUTES #-------------------------------------------------------------
	##############
	
	private $id;						# Database id.
	private $name;						# Name for this member type.
	private $isAdministrator;			# Whether or not this member type can manage member account.
	private $isActive;					# Whether or not this member type is active.
	
	const MEMBERTYPE_ADMINISTRATOR = 1;
	const MEMBERTYPE_STANDARD = 2;
	
	#################
	# CTORS / DTORS #----------------------------------------------------------
	#################
	
	# Default Constructor.
	public function __construct()
	{
	}
	
	##############
	# PROPERTIES #-------------------------------------------------------------
	##############
	
	# ID.
	public function getID()
	{
		return $this->id;
	}
	public function setID($value)
	{
		$this->id = $value;
	}
	
	# Name.
	public function getName()
	{
		return $this->name;
	}
	public function setName($value)
	{
		$this->name = $value;
	}
	
	# Is Administrator.
	public function getIsAdministrator()
	{
		return $this->isAdministrator;
	}
	public function setIsAdministrator($value)
	{
		$this->isAdministrator = $value;
	}

	# Is Active.
	public function getIsActive()
	{
		return $this->isActive;
	}
	public function setIsActive($value)
	{
		$this->isActive = $value;
	}
}

?>