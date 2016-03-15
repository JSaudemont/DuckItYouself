<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var bool
     *
     * @ORM\Column(name="vrai", type="boolean")
     */
    private $vrai;

    /**
     * @ORM\ManyToOne(targetEntity="Question", fetch="EAGER")
     */
    private $question;

    /**
     * @ORM\ManyToMany(targetEntity="Utilisateurs", mappedBy="reponseDonnee", fetch="EAGER")
     */
    private $repEleve;

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
     * Set intitule
     *
     * @param string $intitule
     * @return Reponse
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set vrai
     *
     * @param boolean $vrai
     * @return Reponse
     */
    public function setVrai($vrai)
    {
        $this->vrai = $vrai;

        return $this;
    }

    /**
     * Get vrai
     *
     * @return boolean 
     */
    public function getVrai()
    {
        return $this->vrai;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repEleve = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set question
     *
     * @param \DefaultBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\DefaultBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \DefaultBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Add repEleve
     *
     * @param \DefaultBundle\Entity\Utilisateurs $repEleve
     * @return Reponse
     */
    public function addRepEleve(\DefaultBundle\Entity\Utilisateurs $repEleve)
    {
        $this->repEleve[] = $repEleve;

        return $this;
    }

    /**
     * Remove repEleve
     *
     * @param \DefaultBundle\Entity\Utilisateurs $repEleve
     */
    public function removeRepEleve(\DefaultBundle\Entity\Utilisateurs $repEleve)
    {
        $this->repEleve->removeElement($repEleve);
    }

    /**
     * Get repEleve
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRepEleve()
    {
        return $this->repEleve;
    }
}
