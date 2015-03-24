<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ReservationRepository")
 */
class Reservation
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     * 
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     * @ORM\Id
     */
    private $numero;
    /**
     *@var \Doctrine\Common\Collections\Collection
	 * @ORM\OneToMany(targetEntity="Sejour", mappedBy="reservation")
     */
    private $sejours;
    /**
     * 
     * @var \AppBundle\Entity\CompteClient
     * @ORM\ManyToOne(targetEntity="CompteClient",inversedBy="reservations")
	 * @ORM\JoinColumn(name="client", referencedColumnName="numero")
     */
    private $client;


  
    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Reservation
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
