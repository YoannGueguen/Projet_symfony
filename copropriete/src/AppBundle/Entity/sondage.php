<?php

namespace AppBundle\Entity;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

