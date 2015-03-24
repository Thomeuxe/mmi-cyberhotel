<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteClient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\CompteClientRepository")
 */
class CompteClient
{
    

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroCarteBleue", type="integer")
     */
    private $numeroCarteBleue;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     * @ORM\Id
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     * 
     */
    private $mail;
    /**
     *@var \Doctrine\Common\Collections\Collection
     * @ORM\OneToMany(targetEntity="Reservation", mappedBy="client")
     */
    private $reservations;


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
     * Set numeroCarteBleue
     *
     * @param integer $numeroCarteBleue
     * @return CompteClient
     */
    public function setNumeroCarteBleue($numeroCarteBleue)
    {
        $this->numeroCarteBleue = $numeroCarteBleue;
    
        return $this;
    }

    /**
     * Get numeroCarteBleue
     *
     * @return integer 
     */
    public function getNumeroCarteBleue()
    {
        return $this->numeroCarteBleue;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return CompteClient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return CompteClient
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return CompteClient
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
}
