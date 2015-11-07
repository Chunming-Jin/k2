<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="current_account")
 * @ORM\HasLifecycleCallbacks()
 */
class CurrentAccount
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $customerId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $productId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $count;

    /**
     * @ORM\Column(type="integer")
     */
    protected $totalPrice;

    /**
     * @ORM\Column(type="integer")
     */
    protected $salesId;

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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return CurrentAccount
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return CurrentAccount
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
     * Set count
     *
     * @param integer $count
     *
     * @return CurrentAccount
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
     * Set totalPrice
     *
     * @param integer $totalPrice
     *
     * @return CurrentAccount
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return integer
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set salesId
     *
     * @param integer $salesId
     *
     * @return CurrentAccount
     */
    public function setSalesId($salesId)
    {
        $this->salesId = $salesId;

        return $this;
    }

    /**
     * Get salesId
     *
     * @return integer
     */
    public function getSalesId()
    {
        return $this->salesId;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return CurrentAccount
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
