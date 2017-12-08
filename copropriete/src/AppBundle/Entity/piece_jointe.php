<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piece_jointe
 *
 * @ORM\Table(name="piece_jointe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\piece_jointeRepository")
 */
class piece_jointe
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
     * @ORM\Column(name="url", type="string", length=512)
     */
    private $url;

    /**
     * @ORM\Column(name="projet_id", type="integer")
     * @ORM\ManyToOne(targetEntity="projet")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     */
    private $projet_id;

    /**
     * @ORM\Column(name="versement_id", type="integer")
     * @ORM\OneToMany(targetEntity="versement")
     * @ORM\JoinColumn(name="versement_id", referencedColumnName="id")
     */
    private $versement_id;

    /**
     * @ORM\Column(name="message_id", type="integer")
     * @ORM\OneToMany(targetEntity="message")
     * @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     */
    private $message_id;
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

