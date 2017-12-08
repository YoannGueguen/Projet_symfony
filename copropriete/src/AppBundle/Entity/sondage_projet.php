<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sondage_projet
 *
 * @ORM\Table(name="sondage_projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\sondage_projetRepository")
 */
class sondage_projet
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
     * @ORM\Column(name="projet_id", type="integer")
     * @ORM\ManyToMany(targetEntity="projet")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     */
    private $projet_id;

    /**
     * @ORM\Column(name="sondage_id", type="integer")
     * @ORM\ManyToMany(targetEntity="sondage")
     * @ORM\JoinColumn(name="sondage_id", referencedColumnName="id")
     */
    private $sondage_id;

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

