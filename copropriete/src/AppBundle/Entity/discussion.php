<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * discussion
 *
 * @ORM\Table(name="discussion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\discussionRepository")
 */
class discussion
{

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
        if($this->archive==null){
            $this->setArchive(false);
        }

        if($this->getDateDebut() == ''){
            $time = new \DateTime();
            //on formate la date pour être cohérent avec SQL
            $time->format('Y-m-d H:i:s');
            $this->setDateDebut($time);
        }
    }

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
     * @Assert\Length(min=2)
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(name="date_debut", type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


    /**
     * @ORM\Column(name="archive", type="boolean", options={"default":false})
     */
    private $archive;


    /**
     * @ORM\ManyToMany(targetEntity="user", inversedBy="discussions")
     * @ORM\JoinTable(name="utilisateurs_discussions")
     */
    private $utilisateurs;

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
    public function getNom()
    {
        return $this->nom;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * @param mixed $archive
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;
    }

    /**
     * @param mixed $utilisateurs
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * @param mixed $date_debut
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    public function __toString()
    {
        return $this->getNom();
    }
}

