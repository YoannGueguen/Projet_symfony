<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * user_charge
 *
 * @ORM\Table(name="user_charge")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\user_chargeRepository")
 */
class user_charge
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
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\ManyToMany(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ORM\Column(name="charge_id", type="integer")
     * @ORM\ManyToMany(targetEntity="charge")
     * @ORM\JoinColumn(name="charge_id", referencedColumnName="id")
     */
    private $charge_id;


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

