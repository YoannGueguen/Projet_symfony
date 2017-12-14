<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * user
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class user extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="charge", inversedBy="users")
     */
    private $charges;
    /**
     * @ORM\ManyToMany(targetEntity="reunion", inversedBy="users")
     */
    private $reunions;

    /**
     * @ORM\ManyToMany(targetEntity="discussion", inversedBy="users")
     */
    private $discussions;

    /**
     * @ORM\ManyToMany(targetEntity="projet", inversedBy="users")
     */
    private $projets;

    public function __construct()
    {
        /*$this->charges = new ArrayCollection();
        $this->discussions = new ArrayCollection();
        $this->projets = new ArrayCollection();
        $this->reunions = new ArrayCollection();*/
        $this->roles = ['ROLE_USER'];
    }

    /**
     * @return mixed
     */

    public function getCharge()
    {
        return $this->charges;
    }
}

