<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * choix_user
 *
 * @ORM\Table(name="choix_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\choix_userRepository")
 */
class choix_user
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
     * @ORM\Column(name="choix_id", type="integer")
     * @ORM\ManyToMany(targetEntity="choix")
     * @ORM\JoinColumn(name="choix_id", referencedColumnName="id")
     */
    private $choix_id;

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

