<?php

namespace AppBundle\Entity;

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

