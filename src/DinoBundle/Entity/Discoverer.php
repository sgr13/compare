<?php

namespace DinoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discoverer
 *
 * @ORM\Table(name="discoverer")
 * @ORM\Entity(repositoryClass="DinoBundle\Repository\DiscovererRepository")
 */
class Discoverer
{   
    /**
     * @ORM\OneToMany(targetEntity="DinoData", mappedBy="discoverer")
     */
    private $dinoData;
    
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
     * @ORM\Column(name="discovererPhoto", type="string", length=255)
     */
    private $discovererPhoto;


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
     * @return Discoverer
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
     * Set discovererPhoto
     *
     * @param string $discovererPhoto
     *
     * @return Discoverer
     */
    public function setDiscovererPhoto($discovererPhoto)
    {
        $this->discovererPhoto = $discovererPhoto;

        return $this;
    }

    /**
     * Get discovererPhoto
     *
     * @return string
     */
    public function getDiscovererPhoto()
    {
        return $this->discovererPhoto;
    }
    function getDinoData() {
        return $this->dinoData;
    }

    function setDinoData($dinoData) {
        $this->dinoData = $dinoData;
    }
}

