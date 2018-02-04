<?php

namespace DinoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubOrder
 *
 * @ORM\Table(name="sub_order")
 * @ORM\Entity(repositoryClass="DinoBundle\Repository\SubOrderRepository")
 */
class SubOrder
{   
    /**
     * @ORM\ManyToOne(targetEntity="MainOrder", inversedBy="subOrder")
     */
    private $mainOrder;
    
    /**
     * @ORM\OneToMany(targetEntity="InfraOrder", mappedBy="subOrder")
     */
    private $infraOrder;
    
    /**
     * @ORM\OneToMany(targetEntity="DinoData", mappedBy="subOrder")
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
     * @return SubOrder
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
     * Set nameEng
     *
     * @param string $nameEng
     *
     * @return SubOrder
     */
    public function setNameEng($nameEng)
    {
        $this->nameEng = $nameEng;

        return $this;
    }

    /**
     * Get nameEng
     *
     * @return string
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }
    function getDinoData() {
        return $this->dinoData;
    }

    function setDinoData($dinoData) {
        $this->dinoData = $dinoData;
    }
    
    function getMainOrder() {
        return $this->mainOrder;
    }

    function getInfraOrder() {
        return $this->infraOrder;
    }

    function setMainOrder($mainOrder) {
        $this->mainOrder = $mainOrder;
    }

    function setInfraOrder($infraOrder) {
        $this->infraOrder = $infraOrder;
    }


}

