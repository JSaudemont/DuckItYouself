<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\PostRepository")
 */
class Post
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text")
     */
    private $texte;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     */
    private $auteur;

    /**
     * @ORM\ManyToOne(targetEntity="Topic")
     */
    private $topic;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Post
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set auteur
     *
     * @param \DefaultBundle\Entity\Utilisateurs $auteur
     * @return Post
     */
    public function setAuteur(\DefaultBundle\Entity\Utilisateurs $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \DefaultBundle\Entity\Utilisateurs 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set topic
     *
     * @param \DefaultBundle\Entity\Topic $topic
     * @return Post
     */
    public function setTopic(\DefaultBundle\Entity\Topic $topic = null)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \DefaultBundle\Entity\Topic 
     */
    public function getTopic()
    {
        return $this->topic;
    }
}
