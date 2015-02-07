<?php

namespace Store\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kategoria
 */
class Kategoria
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;


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
     * Set name
     *
     * @param string $name
     * @return Kategoria
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Kategoria
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $newss;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->newss = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add newss
     *
     * @param \Store\NewsBundle\Entity\News $newss
     * @return Kategoria
     */
    public function addNewss(\Store\NewsBundle\Entity\News $newss)
    {
        $this->newss[] = $newss;

        return $this;
    }

    /**
     * Remove newss
     *
     * @param \Store\NewsBundle\Entity\News $newss
     */
    public function removeNewss(\Store\NewsBundle\Entity\News $newss)
    {
        $this->newss->removeElement($newss);
    }

    /**
     * Get newss
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNewss()
    {
        return $this->newss;
    }
}
