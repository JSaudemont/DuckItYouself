<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\CoursRepository")
 */
class Cours
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
     * @var array
     *
     * @ORM\Column(name="titre", type="simple_array")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="miniature", type="string", length=255)
     */
    private $miniature;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean")
     */
    private $visible;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="desciption", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity="Utilisateurs", inversedBy="coursSuivi", fetch="EAGER")
     */
    private $eleves;

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
     * Set courTitre
     *
     * @param array $courTitre
     * @return Cours
     */
    public function setCourTitre($courTitre)
    {
        $this->courTitre = $courTitre;

        return $this;
    }

    /**
     * Get courTitre
     *
     * @return array 
     */
    public function getCourTitre()
    {
        return $this->courTitre;
    }

    /**
     * Set courMiniature
     *
     * @param string $courMiniature
     * @return Cours
     */
    public function setCourMiniature($courMiniature)
    {
        $this->courMiniature = $courMiniature;

        return $this;
    }

    /**
     * Get courMiniature
     *
     * @return string 
     */
    public function getCourMiniature()
    {
        return $this->courMiniature;
    }

    /**
     * Set courVisible
     *
     * @param boolean $courVisible
     * @return Cours
     */
    public function setCourVisible($courVisible)
    {
        $this->courVisible = $courVisible;

        return $this;
    }

    /**
     * Get courVisible
     *
     * @return boolean 
     */
    public function getCourVisible()
    {
        return $this->courVisible;
    }

    /**
     * Set coursDateDebut
     *
     * @param \DateTime $coursDateDebut
     * @return Cours
     */
    public function setCoursDateDebut($coursDateDebut)
    {
        $this->coursDateDebut = $coursDateDebut;

        return $this;
    }

    /**
     * Get coursDateDebut
     *
     * @return \DateTime 
     */
    public function getCoursDateDebut()
    {
        return $this->coursDateDebut;
    }

    /**
     * Set courDateFin
     *
     * @param \DateTime $courDateFin
     * @return Cours
     */
    public function setCourDateFin($courDateFin)
    {
        $this->courDateFin = $courDateFin;

        return $this;
    }

    /**
     * Get courDateFin
     *
     * @return \DateTime 
     */
    public function getCourDateFin()
    {
        return $this->courDateFin;
    }

    /**
     * Set courDesc
     *
     * @param string $courDesc
     * @return Cours
     */
    public function setCourDesc($courDesc)
    {
        $this->courDesc = $courDesc;

        return $this;
    }

    /**
     * Get courDesc
     *
     * @return string 
     */
    public function getCourDesc()
    {
        return $this->courDesc;
    }

    /**
     * Set courVideo
     *
     * @param string $courVideo
     * @return Cours
     */
    public function setCourVideo($courVideo)
    {
        $this->courVideo = $courVideo;

        return $this;
    }

    /**
     * Get courVideo
     *
     * @return string 
     */
    public function getCourVideo()
    {
        return $this->courVideo;
    }

    /**
     * Set courDate
     *
     * @param \DateTime $courDate
     * @return Cours
     */
    public function setCourDate($courDate)
    {
        $this->courDate = $courDate;

        return $this;
    }

    /**
     * Get courDate
     *
     * @return \DateTime 
     */
    public function getCourDate()
    {
        return $this->courDate;
    }

    /**
     * Set titre
     *
     * @param array $titre
     * @return Cours
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return array 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set miniature
     *
     * @param string $miniature
     * @return Cours
     */
    public function setMiniature($miniature)
    {
        $this->miniature = $miniature;

        return $this;
    }

    /**
     * Get miniature
     *
     * @return string 
     */
    public function getMiniature()
    {
        return $this->miniature;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Cours
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Cours
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Cours
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Cours
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
     * Set video
     *
     * @param string $video
     * @return Cours
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string 
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Cours
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
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add eleves
     *
     * @param \DefaultBundle\Entity\Utilisateurs $eleves
     * @return Cours
     */
    public function addElefe(\DefaultBundle\Entity\Utilisateurs $eleves)
    {
        $this->eleves[] = $eleves;

        return $this;
    }

    /**
     * Remove eleves
     *
     * @param \DefaultBundle\Entity\Utilisateurs $eleves
     */
    public function removeElefe(\DefaultBundle\Entity\Utilisateurs $eleves)
    {
        $this->eleves->removeElement($eleves);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEleves()
    {
        return $this->eleves;
    }
}
