<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\messageRepository")
 */
class message
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(name="contenu", type="string", length=2048)
     */
    private $contenu;

    /**
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToOne(targetEntity="participant_discussion")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    private $user_id;

    /**
     * @ORM\Column(name="discu_id", type="integer")
     * @ORM\ManyToOne(targetEntity="participant_discussion")
     * @ORM\JoinColumn(name="discu_id", referencedColumnName="discu_id")
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

