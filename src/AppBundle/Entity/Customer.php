<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="customer")
 * @ORM\HasLifecycleCallbacks()
 */
class Customer
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
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $Province;

    /**
     * @ORM\Column(type="string")
     */
    protected $City;

    /**
     * @ORM\Column(type="string")
     */
    protected $tel1;

    /**
     * @ORM\Column(type="string")
     */
    protected $tel2;

    /**
     * @ORM\Column(type="string")
     */
    protected $tel3;

    /**
     * @ORM\Column(type="integer")
     */
    protected $totalReceivable;

    /**
     * @ORM\Column(type="text")
     */
    protected $remark;

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
     * Set name
     *
     * @param string $name
     *
     * @return Customer
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
     * Set province
     *
     * @param string $province
     *
     * @return Customer
     */
    public function setProvince($province)
    {
        $this->Province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->Province;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Customer
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     *
     * @return Customer
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return Customer
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set tel3
     *
     * @param string $tel3
     *
     * @return Customer
     */
    public function setTel3($tel3)
    {
        $this->tel3 = $tel3;

        return $this;
    }

    /**
     * Get tel3
     *
     * @return string
     */
    public function getTel3()
    {
        return $this->tel3;
    }

    /**
     * Set totalReceivable
     *
     * @param integer $totalReceivable
     *
     * @return Customer
     */
    public function setTotalReceivable($totalReceivable)
    {
        $this->totalReceivable = $totalReceivable;

        return $this;
    }

    /**
     * Get totalReceivable
     *
     * @return integer
     */
    public function getTotalReceivable()
    {
        return $this->totalReceivable;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return Customer
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
     * Set createdUserID
     *
     * @param integer $createdUserID
     *
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
