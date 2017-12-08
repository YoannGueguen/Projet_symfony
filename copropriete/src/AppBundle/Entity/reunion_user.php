<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reunion_user
 *
 * @ORM\Table(name="reunion_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\reunion_userRepository")
 */
class reunion_user
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
     * @ORM\Column(name="reunion_id", type="integer")
     * @ORM\ManyToMany(targetEntity="reunion")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id")
     */
    private $reunion_id;

    /**
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToMany(targetEntity="user")
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

