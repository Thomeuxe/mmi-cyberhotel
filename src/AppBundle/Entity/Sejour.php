<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sejour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\SejourRepository")
 */
class Sejour
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeDebut", type="date")
     * @ORM\Id
     */
    private $dateDeDebut;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbDeJours", type="integer")
     * 
     */
    private $nbDeJours;

    /**
     * @var \AppBundle\Entity\HotelExpress
	 * @ORM\ManyToOne(targetEntity="HotelExpress",inversedBy="sejours")
	 * @ORM\JoinColumn(name="hotel", referencedColumnName="ville")
	 * @ORM\Id
     */
    private $hotel;

    /**
     * @var \AppBundle\Entity\Reservation
     * @ORM\ManyToOne(targetEntity="Reservation",inversedBy="sejours")
	 * @ORM\JoinColumn(name="reservation", referencedColumnName="numero")
     * 
     */
    private $reservation;

    /**
     * @var string
     *
     * @var \Doctrine\Common\Collections\Collection
     * @ORM\OneToMany(targetEntity="Nuitee", mappedBy="sejour") 
     */
    private $nuitees;


    /**
     * Set dateDeDebut
     *
     * @param \DateTime $dateDeDebut
     * @return Sejour
     */
    public function setDateDeDebut($dateDeDebut)
    {
        $this->dateDeDebut = $dateDeDebut;
    
        return $this;
    }

    /**
     * Get dateDeDebut
     *
     * @return \DateTime 
     */
    public function getDateDeDebut()
    {
        return $this->dateDeDebut;
    }

    /**
     * Set nbDeJours
     *
     * @param integer $nbDeJours
     * @return Sejour
     */
    public function setNbDeJours($nbDeJours)
    {
        $this->nbDeJours = $nbDeJours;
    
        return $this;
    }

    /**
     * Get nbDeJours
     *
     * @return integer 
     */
    public function getNbDeJours()
    {
        return $this->nbDeJours;
    }

    /**
     * Set hotel
     *
     * @param string $hotel
     * @return Sejour
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    
        return $this;
    }

    /**
     * Get hotel
     *
     * @return string 
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set reservation
     *
     * @param string $reservation
     * @return Sejour
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;
    
        return $this;
    }

    /**
     * Get reservation
     *
     * @return string 
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set nuitee
     *
     * @param string $nuitee
     * @return Sejour
     */
    public function setNuitee($nuitee)
    {
        $this->nuitee = $nuitee;
    
        return $this;
    }

    /**
     * Get nuitee
     *
     * @return string 
     */
    public function getNuitee()
    {
        return $this->nuitee;
    }
}
