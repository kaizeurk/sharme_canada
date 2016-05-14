<?php
require_once 'Framework/Model.php';


/**
 * Activity
 *
 */
class Activity
{
    /**
     * @var integer
     *
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     */
    private $dateEnd;

    /**
     * @var string
     *
     */
    private $location;

    /**
     * @var string
     *
     */
    private $theme;

    /**
     * @var string
     *
     */
    private $urlImage;

    /**
     * @var string
     *
     */
    private $title;


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
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Activity
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Activity
     */
    public function setDateFin($dateEnd)
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateEnd;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Activity
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Activity
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     * @return Activity
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
     * 
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
    
    /**
     * 
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

}
