<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="description", type="string", length=512)
     */
    private $description;

    /**
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $date_debut;

    /**
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $date_fin;

    /**
     * @ORM\Column(name="discu_id", type="integer")
     * @ORM\OneToMany(targetEntity="discussion")
     * @ORM\JoinColumn(name="discu_id", referencedColumnName="id")
     */
    private $discu_id;

    /**
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToMany(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

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

