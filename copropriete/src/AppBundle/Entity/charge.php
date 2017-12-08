<?php

namespace AppBundle\Entity;

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
     * @ORM\Column(name="contrat_id", type="integer", nullable=true)
     * @ORM\OneToOne(targetEntity="contrat")
     * @ORM\JoinColumn(name="contrat_id", referencedColumnName="id")
     */
    private $contrat_id;

    /**
     * @ORM\Column(name="pj_id", type="integer", nullable=true)
     * @ORM\OneToOne(targetEntity="piece_jointe")
     * @ORM\JoinColumn(name="pj_id", referencedColumnName="id")
     */
    private $pj_id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

