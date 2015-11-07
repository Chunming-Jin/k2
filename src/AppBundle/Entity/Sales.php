<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Blogger\BlogBundle\Entity\Repository\SalesRepository")
 * @ORM\Table(name="sales")
 * @ORM\HasLifecycleCallbacks()
 */
class Sales
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
    protected $ticketId;

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
    protected $measurementId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $unitPrice;

    /**
     * @ORM\Column(type="integer")
     */
    protected $totalPrice;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $saledDate;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdDate;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $invalid;

    /**
     * @ORM\Column(type="integer")
     */
    protected $oldSalesId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $openedUserId;

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
     * Set ticketId
     *
     * @param integer $ticketId
     *
     * @return Sales
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId
     *
     * @return integer
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return Sales
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
     * @return Sales
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
     * @return Sales
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
     * @return Sales
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
     * @return Sales
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
     * Set totalPrice
     *
     * @param integer $totalPrice
     *
     * @return Sales
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
     * Set saledDate
     *
     * @param \DateTime $saledDate
     *
     * @return Sales
     */
    public function setSaledDate($saledDate)
    {
        $this->saledDate = $saledDate;

        return $this;
    }

    /**
     * Get saledDate
     *
     * @return \DateTime
     */
    public function getSaledDate()
    {
        return $this->saledDate;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return Sales
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set invalid
     *
     * @param boolean $invalid
     *
     * @return Sales
     */
    public function setInvalid($invalid)
    {
        $this->invalid = $invalid;

        return $this;
    }

    /**
     * Get invalid
     *
     * @return boolean
     */
    public function getInvalid()
    {
        return $this->invalid;
    }

    /**
     * Set oldSalesId
     *
     * @param integer $oldSalesId
     *
     * @return Sales
     */
    public function setOldSalesId($oldSalesId)
    {
        $this->oldSalesId = $oldSalesId;

        return $this;
    }

    /**
     * Get oldSalesId
     *
     * @return integer
     */
    public function getOldSalesId()
    {
        return $this->oldSalesId;
    }

    /**
     * Set openedUserId
     *
     * @param integer $openedUserId
     *
     * @return Sales
     */
    public function setOpenedUserId($openedUserId)
    {
        $this->openedUserId = $openedUserId;

        return $this;
    }

    /**
     * Get openedUserId
     *
     * @return integer
     */
    public function getOpenedUserId()
    {
        return $this->openedUserId;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Sales
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
