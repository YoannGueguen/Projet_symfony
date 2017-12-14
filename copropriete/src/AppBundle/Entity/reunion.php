<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * reunion
 *
 * @ORM\Table(name="reunion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\reunionRepository")
 */
class reunion
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @ORM\OneToOne(targetEntity="piece_jointe")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pj_id;

    /**
     * @ORM\ManyToMany(targetEntity="user", inversedBy="reunions")
     * @ORM\JoinTable(name="utilisateurs_reunions")
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @return mixed
     */
    public function getPjId()
    {
        return $this->pj_id;
    }

}

