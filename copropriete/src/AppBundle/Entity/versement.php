<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * versement
 *
 * @ORM\Table(name="versement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\versementRepository")
 */
class versement
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
     * @ORM\Column(name="montant", type="decimal", scale=2)
     */
    private $montant;

    /**
     * @Assert\Date()
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="charge", cascade={"remove"})
     * @ORM\JoinColumn(name="charge_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $charge_id;

    /**
     * @ORM\Column(name="pj_id", type="string", length=255, nullable=true)
     */
    private $pj_id;

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
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getChargeId()
    {
        return $this->charge_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @param mixed $charge_id
     */
    public function setChargeId($charge_id)
    {
        $this->charge_id = $charge_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $pj_id
     */
    public function setPjId($pj_id)
    {
        $this->pj_id = $pj_id;
    }

    /**
     * @return mixed
     */
    public function getPjId()
    {
        return $this->pj_id;
    }
}

