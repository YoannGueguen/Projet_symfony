<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * choix
 *
 * @ORM\Table(name="choix")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Entity\choixRepository")
 */
class choix
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
     * @ORM\Column(name="reponse", type="string", length=255)
     */
    private $reponse;

    /**
     * @ORM\Column(name="count_vote", type="integer")
     */
    private $count_vote;

    /**
     * @ORM\Column(name="sondage_id", type="integer")
     * @ORM\OneToOne(targetEntity="sondage")
     * @ORM\JoinColumn(name="sondage_id", referencedColumnName="id")
     */
    private $sondage_id;

    /**
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\OneToOne(targetEntity="user")
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

