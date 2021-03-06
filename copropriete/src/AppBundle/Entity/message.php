<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\messageRepository")
 */
class message
{
    public function __construct()
    {
        if($this->getDate() == ''){
            $time = new \DateTime();
            //on formate la date pour être cohérent avec SQL
            $time->format('Y-m-d H:i:s');
            $this->setDate($time);
        }
    }

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
     * @Assert\NotBlank()
     * @Assert\Length(min=10)
     * @ORM\Column(name="contenu", type="string", length=2048)
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity="discussion")
     * @ORM\JoinColumn(name="discussion_id", referencedColumnName="id")
     */
    private $discussion_id;

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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
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
    public function getDiscussionId()
    {
        return $this->discussion_id;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $discussion_id
     */
    public function setDiscussionId($discussion_id)
    {
        $this->discussion_id = $discussion_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


}

