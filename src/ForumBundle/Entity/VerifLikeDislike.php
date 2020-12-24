<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VerifLikeDislike
 *
 * @ORM\Table(name="verif_like_dislike")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\VerifLikeDislikeRepository")
 */
class VerifLikeDislike
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
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="idCommentaire", type="integer")
     */
    private $idCommentaire;


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
     * @return VerifLikeDislike
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
     * Set idCommentaire
     *
     * @param integer $idCommentaire
     *
     * @return VerifLikeDislike
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;

        return $this;
    }

    /**
     * Get idCommentaire
     *
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }
}

