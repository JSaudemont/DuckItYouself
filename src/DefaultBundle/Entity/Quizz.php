<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizz
 *
 * @ORM\Table(name="quizz")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\QuizzRepository")
 */
class Quizz
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="note_max", type="float")
     */
    private $noteMax;

    /**
     * @ORM\ManyToOne(targetEntity="Chapitres")
     */
    private $chaitre;

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
     * Set nom
     *
     * @param string $nom
     * @return Quizz
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Quizz
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set noteMax
     *
     * @param float $noteMax
     * @return Quizz
     */
    public function setNoteMax($noteMax)
    {
        $this->noteMax = $noteMax;

        return $this;
    }

    /**
     * Get noteMax
     *
     * @return float 
     */
    public function getNoteMax()
    {
        return $this->noteMax;
    }

    /**
     * Set chaitre
     *
     * @param \DefaultBundle\Entity\Chapitres $chaitre
     * @return Quizz
     */
    public function setChaitre(\DefaultBundle\Entity\Chapitres $chaitre = null)
    {
        $this->chaitre = $chaitre;

        return $this;
    }

    /**
     * Get chaitre
     *
     * @return \DefaultBundle\Entity\Chapitres 
     */
    public function getChaitre()
    {
        return $this->chaitre;
    }
}
