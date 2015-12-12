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
     * 代码
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * 编码
     * @ORM\Column(type="string")
     */
    protected $indetifier;

    /**
     * 名称
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * 原料代码
     * @ORM\Column(type="integer")
     */
    protected $materialID;

    /**
     * 原料分类 (带头鱼，无头鱼，边角料)
     * @ORM\Column(type="string")
     */
    protected $materialCategogy;

    /**
     * 调味加工分类 (调味，原味)
     * @ORM\Column(type="string")
     */
    protected $seasonCategory;

    /**
     * 加工分类 (原条，开板，扒皮，砸压，真空，鱼细丝，鱼粗丝，鱼籽，鱼胃，鱼油，鱼花，鱼边)
     * @ORM\Column(type="string")
     */
    protected $processCategory;

    /**
     * 商品分类 (硬板，宣板，半宣，半硬)
     * @ORM\Column(type="string")
     */
    protected $productCategory;

    /**
     * 尺寸
     * @ORM\Column(type="string")
     */
    protected $size;

    /**
     * 计量单位 (条，斤，kg)
     * @ORM\Column(type="string")
     */
    protected $measurementUnit;

    /**
     * 规格（数量)
     * @ORM\Column(type="string")
     */
    protected $spec;

    /**
     * 单价
     * @ORM\Column(type="integer")
     */
    protected $price;

    /**
     * 备注
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
     * Set indetifier
     *
     * @param string $indetifier
     *
     * @return Product
     */
    public function setIndetifier($indetifier)
    {
        $this->indetifier = $indetifier;

        return $this;
    }

    /**
     * Get indetifier
     *
     * @return string
     */
    public function getIndetifier()
    {
        return $this->indetifier;
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
     * Set materialID
     *
     * @param integer $materialID
     *
     * @return Product
     */
    public function setMaterialID($materialID)
    {
        $this->materialID = $materialID;

        return $this;
    }

    /**
     * Get materialID
     *
     * @return integer
     */
    public function getMaterialID()
    {
        return $this->materialID;
    }

    /**
     * Set materialCategogy
     *
     * @param string $materialCategogy
     *
     * @return Product
     */
    public function setMaterialCategogy($materialCategogy)
    {
        $this->materialCategogy = $materialCategogy;

        return $this;
    }

    /**
     * Get materialCategogy
     *
     * @return string
     */
    public function getMaterialCategogy()
    {
        return $this->materialCategogy;
    }

    /**
     * Set seasonCategory
     *
     * @param string $seasonCategory
     *
     * @return Product
     */
    public function setSeasonCategory($seasonCategory)
    {
        $this->seasonCategory = $seasonCategory;

        return $this;
    }

    /**
     * Get seasonCategory
     *
     * @return string
     */
    public function getSeasonCategory()
    {
        return $this->seasonCategory;
    }

    /**
     * Set processCategory
     *
     * @param string $processCategory
     *
     * @return Product
     */
    public function setProcessCategory($processCategory)
    {
        $this->processCategory = $processCategory;

        return $this;
    }

    /**
     * Get processCategory
     *
     * @return string
     */
    public function getProcessCategory()
    {
        return $this->processCategory;
    }

    /**
     * Set productCategory
     *
     * @param string $productCategory
     *
     * @return Product
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Product
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set measurementUnit
     *
     * @param string $measurementUnit
     *
     * @return Product
     */
    public function setMeasurementUnit($measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;

        return $this;
    }

    /**
     * Get measurementUnit
     *
     * @return string
     */
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }

    /**
     * Set spec
     *
     * @param string $spec
     *
     * @return Product
     */
    public function setSpec($spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Get spec
     *
     * @return string
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Product
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
     * Set remark
     *
     * @param string $remark
     *
     * @return Product
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
     * @return Product
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
     * @return Product
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
     * @return Product
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
