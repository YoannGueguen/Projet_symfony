<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * charge
 *
 * @ORM\Table(name="charge")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\chargeRepository")
 */
class charge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(name="date_echeance", type="datetime")
     */
    private $date_echeance;

    /**
     * @ORM\Column(name="montant", type="decimal", scale=2)
     */
    private $montant;

    /**
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\OneToOne(targetEntity="contrat")
     * @ORM\JoinColumn(nullable=true)
     */
    private $contrat_id;

    /**
     * @ORM\OneToOne(targetEntity="piece_jointe")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pj_id;

    /**
     * @ORM\ManyToMany(targetEntity="user", inversedBy="charges")
     * @ORM\JoinTable(name="utilisateurs_charges")
     */
    private $utilisateurs;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getDateEcheance()
    {
        return $this->date_echeance;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @return mixed
     */
    public function getContratId()
    {
        return $this->contrat_id;
    }

    /**
     * @return mixed
     */
    public function getPjId()
    {
        return $this->pj_id;

    }

    /**
     * @return mixed
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

}

