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
     * @var integer
     *
     * @ORM\Column(name="orderid", type="integer", nullable=true)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="serviceid", type="integer", nullable=true)
     */
    private $serviceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="integer", nullable=true)
     */
    private $typeid;



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
     * Set orderid
     *
     * @param integer $orderid
     *
     * @return smOrderService
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set serviceid
     *
     * @param integer $serviceid
     *
     * @return smOrderService
     */
    public function setServiceid($serviceid)
    {
        $this->serviceid = $serviceid;

        return $this;
    }

    /**
     * Get serviceid
     *
     * @return integer
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return smOrderService
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
