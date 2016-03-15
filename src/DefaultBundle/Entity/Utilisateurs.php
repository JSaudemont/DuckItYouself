<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\UtilisateursRepository")
 */
class Utilisateurs
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var bool
     *
     * @ORM\Column(name="prof", type="boolean")
     */
    private $prof;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="sign", type="text", nullable=true)
     */
    private $sign;

    /**
     * @var string
     *
     * @ORM\Column(name="semestre", type="string", length=255)
     */
    private $semestre;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=255)
     */
    private $groupe;

    /**
     * @ORM\ManyToMany(targetEntity="Cours", mappedBy="eleves")
     */
    private $coursSuivi;

    /**
     * @ORM\ManyToMany(targetEntity="Reponse", inversedBy="repEleve")
     */
    private $reponseDonnee;

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
     * @return Utilisateurs
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateurs
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return Utilisateurs
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Utilisateurs
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set prof
     *
     * @param boolean $prof
     * @return Utilisateurs
     */
    public function setProf($prof)
    {
        $this->prof = $prof;

        return $this;
    }

    /**
     * Get prof
     *
     * @return boolean 
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Utilisateurs
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateurs
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set sign
     *
     * @param string $sign
     * @return Utilisateurs
     */
    public function setSign($sign)
    {
        $this->sign = $sign;

        return $this;
    }

    /**
     * Get sign
     *
     * @return string 
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Set semestre
     *
     * @param string $semestre
     * @return Utilisateurs
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return string 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     * @return Utilisateurs
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Get util_id
     *
     * @return integer 
     */
    public function getUtilId()
    {
        return $this->util_id;
    }

    /**
     * Set util_nom
     *
     * @param string $utilNom
     * @return Utilisateurs
     */
    public function setUtilNom($utilNom)
    {
        $this->util_nom = $utilNom;

        return $this;
    }

    /**
     * Get util_nom
     *
     * @return string 
     */
    public function getUtilNom()
    {
        return $this->util_nom;
    }

    /**
     * Set util_prenom
     *
     * @param string $utilPrenom
     * @return Utilisateurs
     */
    public function setUtilPrenom($utilPrenom)
    {
        $this->util_prenom = $utilPrenom;

        return $this;
    }

    /**
     * Get util_prenom
     *
     * @return string 
     */
    public function getUtilPrenom()
    {
        return $this->util_prenom;
    }

    /**
     * Set util_pseudo
     *
     * @param string $utilPseudo
     * @return Utilisateurs
     */
    public function setUtilPseudo($utilPseudo)
    {
        $this->util_pseudo = $utilPseudo;

        return $this;
    }

    /**
     * Get util_pseudo
     *
     * @return string 
     */
    public function getUtilPseudo()
    {
        return $this->util_pseudo;
    }

    /**
     * Set util_mdp
     *
     * @param string $utilMdp
     * @return Utilisateurs
     */
    public function setUtilMdp($utilMdp)
    {
        $this->util_mdp = $utilMdp;

        return $this;
    }

    /**
     * Get util_mdp
     *
     * @return string 
     */
    public function getUtilMdp()
    {
        return $this->util_mdp;
    }

    /**
     * Set util_prof
     *
     * @param boolean $utilProf
     * @return Utilisateurs
     */
    public function setUtilProf($utilProf)
    {
        $this->util_prof = $utilProf;

        return $this;
    }

    /**
     * Get util_prof
     *
     * @return boolean 
     */
    public function getUtilProf()
    {
        return $this->util_prof;
    }

    /**
     * Set util_avatar
     *
     * @param string $utilAvatar
     * @return Utilisateurs
     */
    public function setUtilAvatar($utilAvatar)
    {
        $this->util_avatar = $utilAvatar;

        return $this;
    }

    /**
     * Get util_avatar
     *
     * @return string 
     */
    public function getUtilAvatar()
    {
        return $this->util_avatar;
    }

    /**
     * Set util_mail
     *
     * @param string $utilMail
     * @return Utilisateurs
     */
    public function setUtilMail($utilMail)
    {
        $this->util_mail = $utilMail;

        return $this;
    }

    /**
     * Get util_mail
     *
     * @return string 
     */
    public function getUtilMail()
    {
        return $this->util_mail;
    }

    /**
     * Set util_sign
     *
     * @param string $utilSign
     * @return Utilisateurs
     */
    public function setUtilSign($utilSign)
    {
        $this->util_sign = $utilSign;

        return $this;
    }

    /**
     * Get util_sign
     *
     * @return string 
     */
    public function getUtilSign()
    {
        return $this->util_sign;
    }

    /**
     * Set util_semestre
     *
     * @param string $utilSemestre
     * @return Utilisateurs
     */
    public function setUtilSemestre($utilSemestre)
    {
        $this->util_semestre = $utilSemestre;

        return $this;
    }

    /**
     * Get util_semestre
     *
     * @return string 
     */
    public function getUtilSemestre()
    {
        return $this->util_semestre;
    }

    /**
     * Set util_groupe
     *
     * @param string $utilGroupe
     * @return Utilisateurs
     */
    public function setUtilGroupe($utilGroupe)
    {
        $this->util_groupe = $utilGroupe;

        return $this;
    }

    /**
     * Get util_groupe
     *
     * @return string 
     */
    public function getUtilGroupe()
    {
        return $this->util_groupe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coursSuivi = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add coursSuivi
     *
     * @param \DefaultBundle\Entity\Cours $coursSuivi
     * @return Utilisateurs
     */
    public function addCoursSuivi(\DefaultBundle\Entity\Cours $coursSuivi)
    {
        $this->coursSuivi[] = $coursSuivi;

        return $this;
    }

    /**
     * Remove coursSuivi
     *
     * @param \DefaultBundle\Entity\Cours $coursSuivi
     */
    public function removeCoursSuivi(\DefaultBundle\Entity\Cours $coursSuivi)
    {
        $this->coursSuivi->removeElement($coursSuivi);
    }

    /**
     * Get coursSuivi
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoursSuivi()
    {
        return $this->coursSuivi;
    }

    /**
     * Add reponseDonnee
     *
     * @param \DefaultBundle\Entity\Reponse $reponseDonnee
     * @return Utilisateurs
     */
    public function addReponseDonnee(\DefaultBundle\Entity\Reponse $reponseDonnee)
    {
        $this->reponseDonnee[] = $reponseDonnee;

        return $this;
    }

    /**
     * Remove reponseDonnee
     *
     * @param \DefaultBundle\Entity\Reponse $reponseDonnee
     */
    public function removeReponseDonnee(\DefaultBundle\Entity\Reponse $reponseDonnee)
    {
        $this->reponseDonnee->removeElement($reponseDonnee);
    }

    /**
     * Get reponseDonnee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponseDonnee()
    {
        return $this->reponseDonnee;
    }
}
