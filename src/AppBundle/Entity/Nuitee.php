<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nuitee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\NuiteeRepository")
 */
class Nuitee
{
	/**
	 * @ORM\Column(name="id",type="integer")
	 * @ORM\Id
	 * @ORM\generatedValue
	 * @var Integer
	 */
	private $id;
    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     *
	 * @var \AppBundle\Entity\Chambre
	 *
	 * @ORM\ManyToOne(targetEntity="Chambre",inversedBy="nuitees")
	 * @ORM\JoinColumns({
	 *   @ORM\JoinColumn(name="lieu", referencedColumnName="hotel"),
	 * 	@ORM\JoinColumn(name="chambre", referencedColumnName="numero")})
	 * 
	 * 
	 */
    private $chambreAffectee;
    /**
     *
     * @var \AppBundle\Entity\Sejour
     * @ORM\ManyToOne(targetEntity="Sejour",inversedBy="nuitees")
	 * @ORM\JoinColumn(name="sejour", referencedColumnName="dateDeDebut")
	 *
     */
    private $sejour;


    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Nuitee
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
}
