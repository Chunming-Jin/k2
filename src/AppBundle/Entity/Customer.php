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
    protected $tel;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $printAlone;

    /**
     * @ORM\Column(type="integer")
     */
    protected $receivable;

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
     * Set tel
     *
     * @param string $tel
     *
     * @return Customer
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set printAlone
     *
     * @param boolean $printAlone
     *
     * @return Customer
     */
    public function setPrintAlone($printAlone)
    {
        $this->printAlone = $printAlone;

        return $this;
    }

    /**
     * Get printAlone
     *
     * @return boolean
     */
    public function getPrintAlone()
    {
        return $this->printAlone;
    }

    /**
     * Set receivable
     *
     * @param integer $receivable
     *
     * @return Customer
     */
    public function setReceivable($receivable)
    {
        $this->receivable = $receivable;

        return $this;
    }

    /**
     * Get receivable
     *
     * @return integer
     */
    public function getReceivable()
    {
        return $this->receivable;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Customer
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
