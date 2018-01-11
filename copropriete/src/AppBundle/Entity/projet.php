<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class projet
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
     * @Assert\NotBlank()
     *@Assert\Length(min=2)
     * @Assert\Length(max=255)
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @Assert\NotBlank()
     *@Assert\Length(min=20)
     * @Assert\Length(max=512)
     * @ORM\Column(name="description", type="string", length=512)
     */
    private $description;

    /**
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @Assert\Date()
     * @ORM\Column(name="date_debut", type="date")
     */
    private $date_debut;

    /**
     * @Assert\Date()
     * @ORM\Column(name="date_fin", type="date")
     */
    private $date_fin;

    /**
     * @ORM\OneToMany(targetEntity="discussion", mappedBy="projet", orphanRemoval=true, cascade={"remove"})
     * @ORM\JoinColumn(name="discu_id", referencedColumnName="id", nullable=true)
     */
    private $discu_id;

    /**
     * @ORM\ManyToOne(targetEntity="user", inversedBy="projets", cascade={"remove"})
     * @ORM\JoinTable(name="user_projet")
     */
    private $utilisateurs;

    /**
     * @ORM\OneToMany(targetEntity="piece_jointe", mappedBy="projet", cascade={"remove"})
     * @ORM\JoinColumn(name="pj_id", referencedColumnName="id")
     */
    private $pj_id;

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
    public function getDescription()
    {
        return $this->description;
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
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @return mixed
     */
    public function getDiscuId()
    {
        return $this->discu_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * @param mixed $utilisateurs
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @param mixed $date_fin
     */

    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $discu_id
     */
    public function setDiscuId($discu_id)
    {
        $this->discu_id = $discu_id;
    }

    /**
     * @return mixed
     */
    public function getPjId()
    {
        return $this->pj_id;
    }

    /**
     * @param mixed $pj_id
     */
    public function setPjId($pj_id)
    {
        $this->pj_id = $pj_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}

