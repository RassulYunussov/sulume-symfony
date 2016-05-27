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
    private $service;

    /**
     * @var \AppBundle\Entity\smType
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeid", referencedColumnName="id", unique=true)
     * })
     */
    private $type;

    /**
     * @var \AppBundle\Entity\smUser
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\smUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id", unique=true)
     * })
     */
    private $user;



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
     * Set service
     *
     * @param \AppBundle\Entity\smService $service
     *
     * @return smUserService
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
     * @return smUserService
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

    /**
     * Set user
     *
     * @param \AppBundle\Entity\smUser $user
     *
     * @return smUserService
     */
    public function setUser(\AppBundle\Entity\smUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\smUser
     */
    public function getUser()
    {
        return $this->user;
    }
}
