<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * smUserService
 *
 * @ORM\Table(name="smuserservice", indexes={@ORM\Index(name="fk_service_userservice_idx", columns={"serviceid"}), @ORM\Index(name="fk_type_userservice_idx", columns={"typeid"}), @ORM\Index(name="IDX_A8CCECAEF132696E", columns={"userid"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\smUserServiceRepository")
 */
class smUserService
{
    /**
     * @var float
     *
     * @ORM\Column(name="startprice", type="float", precision=10, scale=0, nullable=true)
     */
    private $startprice;

    /**
     * @var float
     *
     * @ORM\Column(name="endprice", type="float", precision=10, scale=0, nullable=true)
     */
    private $endprice;

    /**
     * @var \AppBundle\Entity\smService
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smService")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serviceid", referencedColumnName="id", unique=true)
     * })
     */
    private $serviceid;

    /**
     * @var \AppBundle\Entity\smType
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeid", referencedColumnName="id", unique=true)
     * })
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\smUser
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id", unique=true)
     * })
     */
    private $userid;



    /**
     * Set startprice
     *
     * @param float $startprice
     *
     * @return smUserService
     */
    public function setStartprice($startprice)
    {
        $this->startprice = $startprice;

        return $this;
    }

    /**
     * Get startprice
     *
     * @return float
     */
    public function getStartprice()
    {
        return $this->startprice;
    }

    /**
     * Set endprice
     *
     * @param float $endprice
     *
     * @return smUserService
     */
    public function setEndprice($endprice)
    {
        $this->endprice = $endprice;

        return $this;
    }

    /**
     * Get endprice
     *
     * @return float
     */
    public function getEndprice()
    {
        return $this->endprice;
    }

    /**
     * Set serviceid
     *
     * @param \AppBundle\Entity\smService $serviceid
     *
     * @return smUserService
     */
    public function setServiceid(\AppBundle\Entity\smService $serviceid = null)
    {
        $this->serviceid = $serviceid;

        return $this;
    }

    /**
     * Get serviceid
     *
     * @return \AppBundle\Entity\smService
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }

    /**
     * Set typeid
     *
     * @param \AppBundle\Entity\smType $typeid
     *
     * @return smUserService
     */
    public function setTypeid(\AppBundle\Entity\smType $typeid = null)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return \AppBundle\Entity\smType
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set userid
     *
     * @param \AppBundle\Entity\smUser $userid
     *
     * @return smUserService
     */
    public function setUserid(\AppBundle\Entity\smUser $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \AppBundle\Entity\smUser
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
