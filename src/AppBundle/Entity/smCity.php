<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * smCity
 *
 * @ORM\Table(name="smcity", indexes={@ORM\Index(name="fk_country_city_idx", columns={"countryid"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\smCityRepository")
 */
class smCity
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
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var \AppBundle\Entity\smCountry
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\smCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryid", referencedColumnName="id")
     * })
     */
    private $country;



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
     * @return smCity
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
     * Set country
     *
     * @param \AppBundle\Entity\smCountry $country
     *
     * @return smCity
     */
    public function setCountry(\AppBundle\Entity\smCountry $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\smCountry
     */
    public function getCountry()
    {
        return $this->country;
    }
}
