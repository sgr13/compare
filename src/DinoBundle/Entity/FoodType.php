<?php

namespace DinoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoodType
 *
 * @ORM\Table(name="food_type")
 * @ORM\Entity(repositoryClass="DinoBundle\Repository\FoodTypeRepository")
 */
class FoodType
{   
    /**
     * @ORM\OneToMany(targetEntity="DinoData", mappedBy="foodType")
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
     * @ORM\Column(name="nameEng", type="string", length=255)
     */
    private $nameEng;


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
     * @return FoodType
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
    
    function getNameEng() {
        return $this->nameEng;
    }

    function setNameEng($nameEng) {
        $this->nameEng = $nameEng;
    }
    
    function getDinoData() {
        return $this->dinoData;
    }

    function setDinoData($dinoData) {
        $this->dinoData = $dinoData;
    }
}

