<?php

namespace DinoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DinoData
 *
 * @ORM\Table(name="dino_data")
 * @ORM\Entity(repositoryClass="DinoBundle\Repository\DinoDataRepository")
 */
class DinoData
{   
    /**
     * @ORM\ManyToOne(targetEntity="Discoverer", inversedBy="dinodata")
     */
    private $discoverer;
    
    /**
     * @ORM\ManyToOne(targetEntity="FoodType", inversedBy="dinodata")
     */
    private $foodType;
    
    /**
     * @ORM\ManyToOne(targetEntity="InfraOrder", inversedBy="dinodata")
     */
    private $infraOrder;
    
    /**
     * @ORM\ManyToOne(targetEntity="MainOrder", inversedBy="dinodata")
     */
    private $mainOrder;
    
    /**
     * @ORM\ManyToOne(targetEntity="Period", inversedBy="dinodata")
     */
    private $period;
    
    /**
     * @ORM\ManyToOne(targetEntity="SubOrder", inversedBy="dinodata")
     */
    private $subOrder;
    
    /**
     * @ORM\ManyToOne(targetEntity="SubPeriod", inversedBy="dinodata")
     */
    private $subPeriod;
    
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
     * @ORM\Column(name="orginalName", type="string", length=255)
     */
    private $orginalName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="weight", type="string", length=255)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="length", type="string", length=255)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="lengthEng", type="string", length=255)
     */
    private $lengthEng;

    /**
     * @var string
     *
     * @ORM\Column(name="discoverYear", type="string", length=255)
     */
    private $discoverYear;

    /**
     * @var string
     *
     * @ORM\Column(name="firstPhoto", type="string", length=255)
     */
    private $firstPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="secondPhoto", type="string", length=255)
     */
    private $secondPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="family", type="string", length=255)
     */
    private $family;

    /**
     * @var string
     *
     * @ORM\Column(name="meaning", type="string", length=255)
     */
    private $meaning;

    /**
     * @var string
     *
     * @ORM\Column(name="meaningEng", type="string", length=255)
     */
    private $meaningEng;


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
     * Set orginalName
     *
     * @param string $orginalName
     *
     * @return DinoData
     */
    public function setOrginalName($orginalName)
    {
        $this->orginalName = $orginalName;

        return $this;
    }

    /**
     * Get orginalName
     *
     * @return string
     */
    public function getOrginalName()
    {
        return $this->orginalName;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DinoData
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
     * Set weight
     *
     * @param string $weight
     *
     * @return DinoData
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }


    /**
     * Set length
     *
     * @param string $length
     *
     * @return DinoData
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set lengthEng
     *
     * @param string $lengthEng
     *
     * @return DinoData
     */
    public function setLengthEng($lengthEng)
    {
        $this->lengthEng = $lengthEng;

        return $this;
    }

    /**
     * Get lengthEng
     *
     * @return string
     */
    public function getLengthEng()
    {
        return $this->lengthEng;
    }

    /**
     * Set discoverYear
     *
     * @param string $discoverYear
     *
     * @return DinoData
     */
    public function setDiscoverYear($discoverYear)
    {
        $this->discoverYear = $discoverYear;

        return $this;
    }

    /**
     * Get discoverYear
     *
     * @return string
     */
    public function getDiscoverYear()
    {
        return $this->discoverYear;
    }

    /**
     * Set firstPhoto
     *
     * @param string $firstPhoto
     *
     * @return DinoData
     */
    public function setFirstPhoto($firstPhoto)
    {
        $this->firstPhoto = $firstPhoto;

        return $this;
    }

    /**
     * Get firstPhoto
     *
     * @return string
     */
    public function getFirstPhoto()
    {
        return $this->firstPhoto;
    }

    /**
     * Set secondPhoto
     *
     * @param string $secondPhoto
     *
     * @return DinoData
     */
    public function setSecondPhoto($secondPhoto)
    {
        $this->secondPhoto = $secondPhoto;

        return $this;
    }

    /**
     * Get secondPhoto
     *
     * @return string
     */
    public function getSecondPhoto()
    {
        return $this->secondPhoto;
    }

    /**
     * Set family
     *
     * @param string $family
     *
     * @return DinoData
     */
    public function setFamily($family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set meaning
     *
     * @param string $meaning
     *
     * @return DinoData
     */
    public function setMeaning($meaning)
    {
        $this->meaning = $meaning;

        return $this;
    }

    /**
     * Get meaning
     *
     * @return string
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * Set meaningEng
     *
     * @param string $meaningEng
     *
     * @return DinoData
     */
    public function setMeaningEng($meaningEng)
    {
        $this->meaningEng = $meaningEng;

        return $this;
    }

    /**
     * Get meaningEng
     *
     * @return string
     */
    public function getMeaningEng()
    {
        return $this->meaningEng;
    }
    
    function getFoodType() {
        return $this->foodType;
    }

    function getInfraOrder() {
        return $this->infraOrder;
    }

    function getMainOrder() {
        return $this->mainOrder;
    }

    function getPeriod() {
        return $this->period;
    }

    function getSubOrder() {
        return $this->subOrder;
    }

    function getSubPeriod() {
        return $this->subPeriod;
    }

    function setFoodType($foodType) {
        $this->foodType = $foodType;
    }

    function setInfraOrder($infraOrder) {
        $this->infraOrder = $infraOrder;
    }

    function setMainOrder($mainOrder) {
        $this->mainOrder = $mainOrder;
    }

    function setPeriod($period) {
        $this->period = $period;
    }

    function setSubOrder($subOrder) {
        $this->subOrder = $subOrder;
    }

    function setSubPeriod($subPeriod) {
        $this->subPeriod = $subPeriod;
    }
    
    function getDiscoverer() {
        return $this->discoverer;
    }

    function setDiscoverer($discoverer) {
        $this->discoverer = $discoverer;
    }
}

