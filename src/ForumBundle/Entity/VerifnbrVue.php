<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VerifnbrVue
 *
 * @ORM\Table(name="verifnbr_vue")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\VerifnbrVueRepository")
 */
class VerifnbrVue
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
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sujet", type="integer")
     */
    private $idSujet;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return VerifnbrVue
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idSujet
     *
     * @param integer $idSujet
     *
     * @return VerifnbrVue
     */
    public function setIdSujet($idSujet)
    {
        $this->idSujet = $idSujet;

        return $this;
    }

    /**
     * Get idSujet
     *
     * @return int
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }
}

