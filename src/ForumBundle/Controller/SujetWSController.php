<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Commentaire;
use ForumBundle\Entity\Sujet;
use ForumBundle\Entity\VerifLikeDislike;
use ForumBundle\Entity\VerifnbrVue;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SujetWSController extends Controller
{



    public function AfflistSujetWSAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('ForumBundle:Sujet')->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujets);
        return new JsonResponse($formatted);

    }

    public function AffTableVerifNbrVueWSAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('ForumBundle:VerifnbrVue')->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujets);
        return new JsonResponse($formatted);

    }


    public function AffTableVerifLikeDislikeWSAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sujets = $em->getRepository('ForumBundle:VerifLikeDislike')->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujets);
        return new JsonResponse($formatted);

    }


    public function AjouterCommentaireWSAction($idSujet,$commentaires,$nomSujet)
    {
        $commentaire = new Commentaire();
        $em = $this->getDoctrine()->getManager();

            $commentaire->setIdSujet($idSujet);
            $commentaire->setCommentaires($commentaires);
        $commentaire->setNomClient("achraf");
        $commentaire->setLikee(0);
        $commentaire->setNbreSignal(0);
        //$commentaire->setIdClient(5);
        $commentaire->setNomSujet($nomSujet);
            $em->persist($commentaire);
            $em->flush($commentaire);

            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($commentaires);
            return new JsonResponse($formatted);
    }

    public function afficherCommentaireWSAction($idSujet)
    {

        $em = $this->getDoctrine()->getManager();

        $q = $em->createQuery('
                UPDATE ForumBundle:Sujet suj
                SET suj.nbrVue=suj.nbrVue+1
                WHERE suj.idSujet = :idSujet')
            ->setParameter('idSujet', $idSujet);


        $commentaires = $em->getRepository('ForumBundle:Commentaire')->listCommentBySujet($idSujet);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaires);
        return new JsonResponse($formatted);

    }

    public function SupprimerCommentaireWSAction($idCom)
    {
        $em=$this->getDoctrine()->getManager();
        $commentaire=$em->getRepository(Commentaire::class)->find($idCom);
        $em->remove($commentaire);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaire);
        return new JsonResponse($formatted);
    }

    public function ModifierCommentaireWSAction($idCom,$commentaires)
    {
        $commentaire = new Commentaire();
        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository(Commentaire::class)->find($idCom);

        $commentaire->setIdCommentaire($idCom);
        $commentaire->setCommentaires($commentaires);
        $commentaire->setNomClient("achraf");
        //$commentaire->setIdClient(5);
        //$commentaire->setNomSujet($nomSujet);
        $em->persist($commentaire);
        $em->flush($commentaire);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaire);
        return new JsonResponse($formatted);
    }

    public function ListCategSujetWSAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository(Sujet::class)->listNomCateg();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujet);
        return new JsonResponse($formatted);
    }

    public function FiltrerSujetWSAction($nomCateg)
    {
        $em = $this->getDoctrine()->getManager();
        $sujet = $em->getRepository(Sujet::class)->listSujetByNomCateg($nomCateg);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujet);
        return new JsonResponse($formatted);
    }

    public function AjouterJaimeWSAction($idCom)
    {
        $em = $this->getDoctrine()->getManager();


        $q = $em->createQuery('
                UPDATE ForumBundle:Commentaire com
                SET com.likee=com.likee+1
                WHERE com.idCommentaire = :idCommentaire')
            ->setParameter('idCommentaire', $idCom);
        $p = $q->execute();
        $commentaire = $em->getRepository(Commentaire::class)->find($idCom);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaire);
        return new JsonResponse($formatted);
    }

    public function AjouterSignalWSAction($idCom)
    {
        $em = $this->getDoctrine()->getManager();


        $q = $em->createQuery('
                UPDATE ForumBundle:Commentaire com
                SET com.nbreSignal=com.nbreSignal+1
                WHERE com.idCommentaire = :idCommentaire')
            ->setParameter('idCommentaire', $idCom);
        $p = $q->execute();
        $commentaire = $em->getRepository(Commentaire::class)->find($idCom);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commentaire);
        return new JsonResponse($formatted);
    }

    public function AjouterNbrVueWSAction($idSujet)
    {
        $em = $this->getDoctrine()->getManager();

        $q = $em->createQuery('
                UPDATE ForumBundle:Sujet suj
                SET suj.nbrVue=suj.nbrVue+1
                WHERE suj.idSujet = :idSujet')
            ->setParameter('idSujet', $idSujet);
        $p = $q->execute();

        $sujet = $em->getRepository(Sujet::class)->find($idSujet);


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($sujet);
        return new JsonResponse($formatted);
    }

    public function AjouterVueWSAction($idSujet,$idUser)
    {
        $VerifnbrVue = new VerifnbrVue();
        $em = $this->getDoctrine()->getManager();

        $VerifnbrVue->setIdSujet($idSujet);
        $VerifnbrVue->setIdUser($idUser);

        $em->persist($VerifnbrVue);
        $em->flush($VerifnbrVue);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($VerifnbrVue);
        return new JsonResponse($formatted);
    }

    public function AjouterLikeDislikeWSAction($idCom,$idUser)
    {
        $VerifLikeDislike = new VerifLikeDislike();
        $em = $this->getDoctrine()->getManager();

        $VerifLikeDislike->setIdCommentaire($idCom);
        $VerifLikeDislike->setIdUser($idUser);

        $em->persist($VerifLikeDislike);
        $em->flush($VerifLikeDislike);

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($VerifLikeDislike);
        return new JsonResponse($formatted);
    }


}
