<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stock")
 * @ORM\HasLifecycleCallbacks()
 */
class Stock
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * type:
     *      0 : init stock
     *      1 : stock in
     *      2 : stock out
     */
    protected $operationType;

    /**
     * @ORM\Column(type="integer")
     */
    protected $productId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $countOfUnits;

    /**
     * @ORM\Column(type="integer")
     */
    protected $count;

    /**
     * @ORM\Column(type="integer")
     */
    protected $measurementId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $storageId;

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
     * Set operationType
     *
     * @param integer $operationType
     *
     * @return Stock
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;

        return $this;
    }

    /**
     * Get operationType
     *
     * @return integer
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return Stock
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set countOfUnits
     *
     * @param integer $countOfUnits
     *
     * @return Stock
     */
    public function setCountOfUnits($countOfUnits)
    {
        $this->countOfUnits = $countOfUnits;

        return $this;
    }

    /**
     * Get countOfUnits
     *
     * @return integer
     */
    public function getCountOfUnits()
    {
        return $this->countOfUnits;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Stock
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set measurementId
     *
     * @param integer $measurementId
     *
     * @return Stock
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
     * Set storageId
     *
     * @param integer $storageId
     *
     * @return Stock
     */
    public function setStorageId($storageId)
    {
        $this->storageId = $storageId;

        return $this;
    }

    /**
     * Get storageId
     *
     * @return integer
     */
    public function getStorageId()
    {
        return $this->storageId;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Stock
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
