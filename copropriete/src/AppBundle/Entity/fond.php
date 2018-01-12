<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * fond
 *
 * @ORM\Table(name="fond")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\fondRepository")
 */
class fond
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
     * @Assert\NotBlank()
     * @ORM\OneToOne(targetEntity="charge", cascade={"remove"})
     * @ORM\JoinColumn(name="charge_id", referencedColumnName="id", onDelete="CASCADE", nullable=false)
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

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getChargeId()
    {
        return $this->charge_id;
    }

    /**
     * @param mixed $charge_id
     */
    public function setChargeId($charge_id)
    {
        $this->charge_id = $charge_id;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}

