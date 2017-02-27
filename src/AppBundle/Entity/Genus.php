<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genus
 *
 * @ORM\Table(name="genus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GenusRepository")
 */
class Genus
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", nullable=true)
    */
    private $subFamily;
    
    /**
     * @var integer
     * 
     * @ORM\Column(type="integer", nullable=true)
    */
    private $speciesCount;
    
    /**
     * @var string
     * 
     * @ORM\Column(type="string", nullable=true)
    */
    private $funFact;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished = true;
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Genus
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
     * Set subFamily
     *
     * @param string $subFamily
     *
     * @return Genus
     */
    public function setSubFamily($subFamily)
    {
        $this->subFamily = $subFamily;

        return $this;
    }
    
    /**
     * Set speciesCount
     *
     * @param string $speciesCount
     *
     * @return Genus
     */
    public function setSpeciesCount($speciesCount)
    {
        $this->speciesCount = $speciesCount;

        return $this;
    }
    
    /**
     * Set funFact
     *
     * @param string $funFact
     *
     * @return Genus
     */
    public function setFunFact($funFact)
    {
        $this->funFact = $funFact;

        return $this;
    }

    /**
     * Get speciesCount
     *
     * @return integer
     */
    public function getSpeciesCount()
    {
        return $this->speciesCount;
    }
    
    
    public function getUpdatedAt()
    {
        return new \DateTime('-'.rand(0, 100).' days');
    }

    
    public function getSubFamily()
    {
        return $this->subFamily;
    }

    public function getFunFact()
    {
        return $this->funFact;
    }
    
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    }
    
    
}

