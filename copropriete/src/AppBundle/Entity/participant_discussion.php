<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * participant_discussion
 *
 * @ORM\Table(name="participant_discussion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\participant_discussionRepository")
 */
class participant_discussion
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
     * @ORM\Column(name="createur", type="boolean")
     */
    private $createur;

    /**
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToMany(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ORM\Column(name="discu_id", type="integer")
     * @ORM\ManyToMany(targetEntity="discussion")
     * @ORM\JoinColumn(name="discu_id", referencedColumnName="id")
     */
    private $discu_id;


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

