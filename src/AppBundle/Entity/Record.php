<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="record")
 * @ORM\HasLifecycleCallbacks()
 */
class Record
{
    /**
     * 销售记录号
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * 票据号
     * @ORM\Column(type="integer")
     */
    protected $ticketID;

    /**
     * 销售日期
     * @ORM\Column(type="datetime")
     */
    protected $saleDate;

    /**
     * 品种代码
     * @ORM\Column(type="integer")
     */
    protected $productID;

    /**
     * 保管仓库
     * @ORM\Column(type="string")
     */
    protected $storage;

    /**
     * 操作（出库，入库，优惠，退换，数量短缺）
     * @ORM\Column(type="string")
     */
    protected $opration;

    /**
     * 数量/件
     * @ORM\Column(type="integer")
     */
    protected $countOfUnit;

    /**
     * 件数
     * @ORM\Column(type="integer")
     */
    protected $countPerUnit;

    /**
     * 总数量
     * @ORM\Column(type="integer")
     */
    protected $totalCount;

    /**
     * 单价
     * @ORM\Column(type="integer")
     */
    protected $price;

    /**
     * 应收款
     * @ORM\Column(type="integer")
     */
    protected $totalPrice;

    /**
     * 是否已收款
     * @ORM\Column(type="boolean")
     */
    protected $collected;

    /**
     * 收款的销售记录号
     * @ORM\Column(type="integer")
     */
    protected $collectRecordID;

    /**
     * 实收款
     * @ORM\Column(type="integer")
     */
    protected $realCollection;

    /**
     * 客户代码
     * @ORM\Column(type="integer")
     */
    protected $customerID;

    /**
     * 备注
     * @ORM\Column(type="text")
     */
    protected $remark;

    /**
     * 作废
     * @ORM\Column(type="boolean")
     */
    protected $invalid;

    /**
     * 原销售记录
     * @ORM\Column(type="integer")
     */
    protected $orgRecordID;

    /**
     * 创建用户
     * @ORM\Column(type="integer")
     */
    protected $createdUserID;

    /**
     * 创建日期
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * 更新日期
     * @ORM\Column(type="datetime")
     */
    protected $modified;

    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }


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
     * Set ticketID
     *
     * @param integer $ticketID
     *
     * @return Record
     */
    public function setTicketID($ticketID)
    {
        $this->ticketID = $ticketID;

        return $this;
    }

    /**
     * Get ticketID
     *
     * @return integer
     */
    public function getTicketID()
    {
        return $this->ticketID;
    }

    /**
     * Set saleDate
     *
     * @param \DateTime $saleDate
     *
     * @return Record
     */
    public function setSaleDate($saleDate)
    {
        $this->saleDate = $saleDate;

        return $this;
    }

    /**
     * Get saleDate
     *
     * @return \DateTime
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }

    /**
     * Set productID
     *
     * @param integer $productID
     *
     * @return Record
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    /**
     * Get productID
     *
     * @return integer
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Set storage
     *
     * @param string $storage
     *
     * @return Record
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set opration
     *
     * @param string $opration
     *
     * @return Record
     */
    public function setOpration($opration)
    {
        $this->opration = $opration;

        return $this;
    }

    /**
     * Get opration
     *
     * @return string
     */
    public function getOpration()
    {
        return $this->opration;
    }

    /**
     * Set countOfUnit
     *
     * @param integer $countOfUnit
     *
     * @return Record
     */
    public function setCountOfUnit($countOfUnit)
    {
        $this->countOfUnit = $countOfUnit;

        return $this;
    }

    /**
     * Get countOfUnit
     *
     * @return integer
     */
    public function getCountOfUnit()
    {
        return $this->countOfUnit;
    }

    /**
     * Set countPerUnit
     *
     * @param integer $countPerUnit
     *
     * @return Record
     */
    public function setCountPerUnit($countPerUnit)
    {
        $this->countPerUnit = $countPerUnit;

        return $this;
    }

    /**
     * Get countPerUnit
     *
     * @return integer
     */
    public function getCountPerUnit()
    {
        return $this->countPerUnit;
    }

    /**
     * Set totalCount
     *
     * @param integer $totalCount
     *
     * @return Record
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    /**
     * Get totalCount
     *
     * @return integer
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Record
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set totalPrice
     *
     * @param integer $totalPrice
     *
     * @return Record
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
     * Set collected
     *
     * @param boolean $collected
     *
     * @return Record
     */
    public function setCollected($collected)
    {
        $this->collected = $collected;

        return $this;
    }

    /**
     * Get collected
     *
     * @return boolean
     */
    public function getCollected()
    {
        return $this->collected;
    }

    /**
     * Set collectRecordID
     *
     * @param integer $collectRecordID
     *
     * @return Record
     */
    public function setCollectRecordID($collectRecordID)
    {
        $this->collectRecordID = $collectRecordID;

        return $this;
    }

    /**
     * Get collectRecordID
     *
     * @return integer
     */
    public function getCollectRecordID()
    {
        return $this->collectRecordID;
    }

    /**
     * Set realCollection
     *
     * @param integer $realCollection
     *
     * @return Record
     */
    public function setRealCollection($realCollection)
    {
        $this->realCollection = $realCollection;

        return $this;
    }

    /**
     * Get realCollection
     *
     * @return integer
     */
    public function getRealCollection()
    {
        return $this->realCollection;
    }

    /**
     * Set customerID
     *
     * @param integer $customerID
     *
     * @return Record
     */
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }

    /**
     * Get customerID
     *
     * @return integer
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return Record
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set invalid
     *
     * @param boolean $invalid
     *
     * @return Record
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
     * Set orgRecordID
     *
     * @param integer $orgRecordID
     *
     * @return Record
     */
    public function setOrgRecordID($orgRecordID)
    {
        $this->orgRecordID = $orgRecordID;

        return $this;
    }

    /**
     * Get orgRecordID
     *
     * @return integer
     */
    public function getOrgRecordID()
    {
        return $this->orgRecordID;
    }

    /**
     * Set createdUserID
     *
     * @param integer $createdUserID
     *
     * @return Record
     */
    public function setCreatedUserID($createdUserID)
    {
        $this->createdUserID = $createdUserID;

        return $this;
    }

    /**
     * Get createdUserID
     *
     * @return integer
     */
    public function getCreatedUserID()
    {
        return $this->createdUserID;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Record
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     *
     * @return Record
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }
}
