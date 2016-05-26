<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * smOrder
 *
 * @ORM\Table(name="smorder", indexes={@ORM\Index(name="fk_city_order_idx", columns={"cityid"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\smOrderRepository")
 */
class smOrder
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
     * @var string
     *
     * @ORM\Column(name="clientname", type="string", length=45, nullable=false)
     */
    private $clientname;

    /**
     * @var string
     *
     * @ORM\Column(name="clientemail", type="string", length=45, nullable=false)
     */
    private $clientemail;

    /**
     * @var string
     *
     * @ORM\Column(name="clientmobile", type="string", length=45, nullable=false)
     */
    private $clientmobile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="servicedate", type="datetime", nullable=false)
     */
    private $servicedate;

    /**
     * @var float
     *
     * @ORM\Column(name="pricestart", type="float", precision=10, scale=0, nullable=true)
     */
    private $pricestart;

    /**
     * @var float
     *
     * @ORM\Column(name="priceend", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceend;

    /**
     * @var \AppBundle\Entity\smCity
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\smCity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cityid", referencedColumnName="id")
     * })
     */
    private $cityid;



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
     * Set clientname
     *
     * @param string $clientname
     *
     * @return smOrder
     */
    public function setClientname($clientname)
    {
        $this->clientname = $clientname;

        return $this;
    }

    /**
     * Get clientname
     *
     * @return string
     */
    public function getClientname()
    {
        return $this->clientname;
    }

    /**
     * Set clientemail
     *
     * @param string $clientemail
     *
     * @return smOrder
     */
    public function setClientemail($clientemail)
    {
        $this->clientemail = $clientemail;

        return $this;
    }

    /**
     * Get clientemail
     *
     * @return string
     */
    public function getClientemail()
    {
        return $this->clientemail;
    }

    /**
     * Set clientmobile
     *
     * @param string $clientmobile
     *
     * @return smOrder
     */
    public function setClientmobile($clientmobile)
    {
        $this->clientmobile = $clientmobile;

        return $this;
    }

    /**
     * Get clientmobile
     *
     * @return string
     */
    public function getClientmobile()
    {
        return $this->clientmobile;
    }

    /**
     * Set servicedate
     *
     * @param \DateTime $servicedate
     *
     * @return smOrder
     */
    public function setServicedate($servicedate)
    {
        $this->servicedate = $servicedate;

        return $this;
    }

    /**
     * Get servicedate
     *
     * @return \DateTime
     */
    public function getServicedate()
    {
        return $this->servicedate;
    }

    /**
     * Set pricestart
     *
     * @param float $pricestart
     *
     * @return smOrder
     */
    public function setPricestart($pricestart)
    {
        $this->pricestart = $pricestart;

        return $this;
    }

    /**
     * Get pricestart
     *
     * @return float
     */
    public function getPricestart()
    {
        return $this->pricestart;
    }

    /**
     * Set priceend
     *
     * @param float $priceend
     *
     * @return smOrder
     */
    public function setPriceend($priceend)
    {
        $this->priceend = $priceend;

        return $this;
    }

    /**
     * Get priceend
     *
     * @return float
     */
    public function getPriceend()
    {
        return $this->priceend;
    }

    /**
     * Set cityid
     *
     * @param \AppBundle\Entity\smCity $cityid
     *
     * @return smOrder
     */
    public function setCityid(\AppBundle\Entity\smCity $cityid = null)
    {
        $this->cityid = $cityid;

        return $this;
    }

    /**
     * Get cityid
     *
     * @return \AppBundle\Entity\smCity
     */
    public function getCityid()
    {
        return $this->cityid;
    }
}
