<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * piece_jointe
 *
 * @ORM\Table(name="piece_jointe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\piece_jointeRepository")
 */
class piece_jointe
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
     * @ORM\Column(name="url", type="string")
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="projet")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     */
    private $projet_id;

    /**
     * @ORM\OneToMany(targetEntity="message", mappedBy="piece_jointe")
     * @ORM\JoinColumn(name="message_id", referencedColumnName="id")
     */
    private $message_id;
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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getProjetId()
    {
        return $this->projet_id;
    }

    /**
     * @return mixed
     */
    public function getVersementId()
    {
        return $this->versement_id;
    }

    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->message_id;
    }
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

}

