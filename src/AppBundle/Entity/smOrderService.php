<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * smOrderService
 *
 * @ORM\Table(name="smorderservice")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\smOrderServiceRepository")
 */
class smOrderService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\smOrder
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orderid", referencedColumnName="id", unique=true)
     * })
     */
    private $order;

    /**
     * @var \AppBundle\Entity\smService
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smService")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serviceid", referencedColumnName="id", unique=true)
     * })
     */
    private $service;

    /**
     * @var \AppBundle\Entity\smType
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeid", referencedColumnName="id", unique=true)
     * })
     */
    private $type;



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
     * Set order
     *
     * @param \AppBundle\Entity\smOrder $order
     *
     * @return smOrderService
     */
    public function setOrder(\AppBundle\Entity\smOrder $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AppBundle\Entity\smOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\smService $service
     *
     * @return smOrderService
     */
    public function setService(\AppBundle\Entity\smService $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\smService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set type
     *
     * @param \AppBundle\Entity\smType $type
     *
     * @return smOrderService
     */
    public function setType(\AppBundle\Entity\smType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\smType
     */
    public function getType()
    {
        return $this->type;
    }
}
