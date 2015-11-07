<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 * @ORM\HasLifecycleCallbacks()
 */
class Product
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $identifier;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $produceYear;

    /**
     * @ORM\Column(type="integer")
     */
    protected $measurementId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $unitPrice;

    /**
     * @ORM\Column(type="integer")
     */
    protected $countOfOneUnit;

    /**
     * @ORM\Column(type="integer")
     */
    protected $stockCount;

    /**
     * @ORM\Column(type="string")
     */
    protected $remarks;

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
     * Set identifier
     *
     * @param string $identifier
     *
     * @return Product
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set produceYear
     *
     * @param integer $produceYear
     *
     * @return Product
     */
    public function setProduceYear($produceYear)
    {
        $this->produceYear = $produceYear;

        return $this;
    }

    /**
     * Get produceYear
     *
     * @return integer
     */
    public function getProduceYear()
    {
        return $this->produceYear;
    }

    /**
     * Set measurementId
     *
     * @param integer $measurementId
     *
     * @return Product
     */
    public function setMeasurementId($measurementId)
    {
        $this->measurementId = $measurementId;

        return $this;
    }

    /**
     * Get measurementId
     *
     * @return integer
     */
    public function getMeasurementId()
    {
        return $this->measurementId;
    }

    /**
     * Set unitPrice
     *
     * @param integer $unitPrice
     *
     * @return Product
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return integer
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set countOfOneUnit
     *
     * @param integer $countOfOneUnit
     *
     * @return Product
     */
    public function setCountOfOneUnit($countOfOneUnit)
    {
        $this->countOfOneUnit = $countOfOneUnit;

        return $this;
    }

    /**
     * Get countOfOneUnit
     *
     * @return integer
     */
    public function getCountOfOneUnit()
    {
        return $this->countOfOneUnit;
    }

    /**
     * Set stockCount
     *
     * @param integer $stockCount
     *
     * @return Product
     */
    public function setStockCount($stockCount)
    {
        $this->stockCount = $stockCount;

        return $this;
    }

    /**
     * Get stockCount
     *
     * @return integer
     */
    public function getStockCount()
    {
        return $this->stockCount;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Product
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
}
