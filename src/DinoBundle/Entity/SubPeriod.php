<?php

namespace DinoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubPeriod
 *
 * @ORM\Table(name="sub_period")
 * @ORM\Entity(repositoryClass="DinoBundle\Repository\SubPeriodRepository")
 */
class SubPeriod
{   
    /**
     * @ORM\ManyToOne(targetEntity="Period", inversedBy="subPeriod")
     */
    private $period;
    
    /**
     * @ORM\OneToMany(targetEntity="DinoData", mappedBy="subPeriod")
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
     * @return SubPeriod
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
    function getPeriod() {
        return $this->period;
    }

    function setPeriod($period) {
        $this->period = $period;
    }



}

