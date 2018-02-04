<?php

namespace DinoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfraOrder
 *
 * @ORM\Table(name="infra_order")
 * @ORM\Entity(repositoryClass="DinoBundle\Repository\InfraOrderRepository")
 */
class InfraOrder
{   
    /**
     * @ORM\ManyToOne(targetEntity="SubOrder", inversedBy="infraOrder")
     */
    private $subOrder;
    
    /**
     * @ORM\OneToMany(targetEntity="DinoData", mappedBy="infraOrder")
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
    
    function getName() {
        return $this->name;
    }

    function getNameEng() {
        return $this->nameEng;
    }

    function setName($name) {
        $this->name = $name;
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
    
    function getSubOrder() {
        return $this->subOrder;
    }

    function setSubOrder($subOrder) {
        $this->subOrder = $subOrder;
    }


}

