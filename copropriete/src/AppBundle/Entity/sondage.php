<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * sondage
 *
 * @ORM\Table(name="sondage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sondageRepository")
 */
class sondage
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
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @ORM\Column(name="date_fin", type="datetime")
     */
    private $date_fin;


    /**
     * @ORM\ManyToMany(targetEntity="projet", inversedBy="sondages")
     */
    private $projets;
    public function __construct()
    {
        $this->projets = new ArrayCollection();
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
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

}

