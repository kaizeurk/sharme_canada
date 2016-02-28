<?php

namespace sharme\model\person;


/**
 * Person
 *
 */
class Person
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var string
     *
     */
    private $nom;

    /**
     * @var string
     *
     */
    private $prenom;

    /**
     * @var string
     *
     */
    private $nas;

    /**
     * @var \DateTime
     *
    private $dateNaiss;

    /**
     * @var string
     *
     */
    private $noTel;

    /**
     * @var string
     *
     */
    private $idAdress;

    /**
     * @var string
     *
     */
    private $role;

    /**
     * @var string
     *
     */
    private $urlImage;

    /**
     * @var string
     *
     */
    private $courriel;

    /**
     * @var \DateTime
     *
     */
    private $dateCrea;

    /**
     * @var \DateTime
     *
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     */
    private $dateModif;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Person
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Person
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nas
     *
     * @param string $nas
     * @return Person
     */
    public function setNas($nas)
    {
        $this->nas = $nas;

        return $this;
    }

    /**
     * Get nas
     *
     * @return string 
     */
    public function getNas()
    {
        return $this->nas;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return Person
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set noTel
     *
     * @param string $noTel
     * @return Person
     */
    public function setNoTel($noTel)
    {
        $this->noTel = $noTel;

        return $this;
    }

    /**
     * Get noTel
     *
     * @return string 
     */
    public function getNoTel()
    {
        return $this->noTel;
    }

    /**
     * Set idAdress
     *
     * @param string $idAdress
     * @return Person
     */
    public function setIdAdress($idAdress)
    {
        $this->idAdress = $idAdress;

        return $this;
    }

    /**
     * Get idAdress
     *
     * @return string 
     */
    public function getIdAdress()
    {
        return $this->idAdress;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Person
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     * @return Person
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string 
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set courriel
     *
     * @param string $courriel
     * @return Person
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;

        return $this;
    }

    /**
     * Get courriel
     *
     * @return string 
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Set dateCrea
     *
     * @param \DateTime $dateCrea
     * @return Person
     */
    public function setDateCrea($dateCrea)
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

    /**
     * Get dateCrea
     *
     * @return \DateTime 
     */
    public function getDateCrea()
    {
        return $this->dateCrea;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Person
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     * @return Person
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime 
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }
}
