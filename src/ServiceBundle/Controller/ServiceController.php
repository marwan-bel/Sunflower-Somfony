<?php

namespace ServiceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use ServiceBundle\Entity\Service;
use ServiceBundle\Form\RechercheType;
use ServiceBundle\Form\ServiceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Skies\SkiesQRcodeBundle\Generator\Generator;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
/**
 * Service controller.
 *
 */
class ServiceController extends Controller
{
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        /**##############"Firas gazzah###################*/
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=="anon.")
        {
            $count=$em->getRepository('CommandeBundle:LigneCmd')->contano();
            $countf=$em->getRepository('ProduitBundle:Favoris')->count(0);

        }else {
            $idU=$user->getId();
            $count=$em->getRepository('CommandeBundle:LigneCmd')->cont($idU);
            $countf=$em->getRepository('ProduitBundle:Favoris')->count($idU);

        }
        /*##########################################################################################*/
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('ServiceBundle:Service')->findAll();

        return $this->render('@Service/service/index.html.twig', array(
            'services' => $services,'count'=>$count,'countf'=>$countf
        ));
    }
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function rechercheAction(Request $request)
    {

        $service = new Service();
        $form = $this->createForm(RechercheType::class, $service);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {


            $services=$this->getDoctrine()->getRepository(service::class)->findBy(array('nomService'=>$service->getNomService()));

        }else
        {
            $services=$this->getDoctrine()->getManager()->getRepository('ServiceBundle:Service')->findAll();

        }
        return $this->render("@Service/service/recherche.html.twig",array("form"=>$form->createView(),'services' => $services));



    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction(Request $request)

    {/**##############"Firas gazzah###################*/
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=="anon.")
        {
            $count=$em->getRepository('CommandeBundle:LigneCmd')->contano();
            $countf=$em->getRepository('ProduitBundle:Favoris')->count(0);

        }else {
            $idU=$user->getId();
            $count=$em->getRepository('CommandeBundle:LigneCmd')->cont($idU);
            $countf=$em->getRepository('ProduitBundle:Favoris')->count($idU);

        }
        /*##########################################################################################*/
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $username = $user->getUsername();
        $userid = $user->getId();
        $useremail= $user->getEmail();
        $service = new Service();
        $form = $this->createForm('ServiceBundle\Form\ServiceType', $service);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $service->setIdAgent($userid);
            $service->setNomAgent($username);
            $service->setContact($useremail);
            $file= $service->getImage();
            $fileName =md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('image_directory'),$fileName

            );
            $service->setImage($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirectToRoute('service_show', array('idService' => $service->getIdservice()));
        }

        return $this->render('@Service/service/new.html.twig', array(
            'service' => $service,
            'form' => $form->createView(),'count'=>$count,'countf'=>$countf
        ));
    }

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function devisAction(Request $request, Service $service)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=="anon.")
        {
            $count=$em->getRepository('CommandeBundle:LigneCmd')->contano();
            $countf=$em->getRepository('ProduitBundle:Favoris')->count(0);

        }else {
            $idU=$user->getId();
            $count=$em->getRepository('CommandeBundle:LigneCmd')->cont($idU);
            $countf=$em->getRepository('ProduitBundle:Favoris')->count($idU);

        }
        $form = $this->createForm(ServiceType::class);
        $form->handleRequest($request);
        $DevisFormData = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $services = $em->getRepository('ServiceBundle:Service')->findAll();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $useremail = $user->getEmail();
        $this->addFlash('info', 'Some useful info');
        $message = \Swift_Message::newInstance('devis')
            ->setFrom('sunflower.thesquad@gmail.com')
            ->setTo($useremail)
            ->setContentType('text/html')
            ->setBody($this->renderView(
                '@Service/service/email-template.html.twig'
                , ['user' => $user,
                    'service' => $service]
            ));
        $this->get('mailer')->send($message);
        $this->addFlash('success', 'It sent!');
        return $this->redirectToRoute('service_showuser', ['idService' => $service->getIdService(),'count'=>$count,'countf'=>$countf]);

    }
   public function invoiceAction(Service $service)
    {
        $em = $this->getDoctrine()->getManager();


        $user = $this->getUser();
        $html = $this->renderView('@Service/service/email-template.html.twig',
            ['service' => $service, 'user' => $user]);

        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'file.pdf'
        );

    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction(Service $service)
    {/**##############"Firas gazzah###################*/
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=="anon.")
        {
            $count=$em->getRepository('CommandeBundle:LigneCmd')->contano();
            $countf=$em->getRepository('ProduitBundle:Favoris')->count(0);

        }else {
            $idU=$user->getId();
            $count=$em->getRepository('CommandeBundle:LigneCmd')->cont($idU);
            $countf=$em->getRepository('ProduitBundle:Favoris')->count($idU);

        }
        /*##########################################################################################*/
        $deleteForm = $this->createDeleteForm($service);

        return $this->render('@Service/service/show.html.twig', array(
            'service' => $service,
            'delete_form' => $deleteForm->createView(),'count'=>$count,'countf'=>$countf
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction(Request $request, Service $service)
    {
        $deleteForm = $this->createDeleteForm($service);
        $editForm = $this->createForm('ServiceBundle\Form\ServiceType', $service);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('service_edit', array('idService' => $service->getIdservice()));
        }

        return $this->render('@Service/service/edit.html.twig', array(
            'service' => $service,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, Service $service)
    {
        $form = $this->createDeleteForm($service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($service);
            $em->flush();
        }

        return $this->redirectToRoute('service_index');
    }

    /**
     * Creates a form to delete a service entity.
     *
     * @param Service $service The service entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Service $service)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('service_delete', array('idService' => $service->getIdservice())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function ShowfrontAction(Request $request)
    {/**##############"Firas gazzah###################*/
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=="anon.")
        {
            $count=$em->getRepository('CommandeBundle:LigneCmd')->contano();
            $countf=$em->getRepository('ProduitBundle:Favoris')->count(0);

        }else {
            $idU=$user->getId();
            $count=$em->getRepository('CommandeBundle:LigneCmd')->cont($idU);
            $countf=$em->getRepository('ProduitBundle:Favoris')->count($idU);

        }
        /*##########################################################################################*/
        $em = $this->get('doctrine.orm.entity_manager');
        if(isset($_GET['region'])){
            $services = $em->getRepository('ServiceBundle:Service')
                ->findByRegion($_GET['region']);
        }
        else
            $services = $em->getRepository('ServiceBundle:Service')
                ->findAll();




        return $this->render("@Service/service/showfront.html.twig",array('services' => $services,'count'=>$count,'countf'=>$countf));

    }
    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function ShowuserAction(Service $service)
    {/**##############"Firas gazzah###################*/
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($user=="anon.")
        {
            $count=$em->getRepository('CommandeBundle:LigneCmd')->contano();
            $countf=$em->getRepository('ProduitBundle:Favoris')->count(0);

        }else {
            $idU=$user->getId();
            $count=$em->getRepository('CommandeBundle:LigneCmd')->cont($idU);
            $countf=$em->getRepository('ProduitBundle:Favoris')->count($idU);

        }
        /*##########################################################################################*/
        $deleteForm = $this->createDeleteForm($service);

        return $this->render('@Service/service/showuser.html.twig', array(
            'service' => $service,'count'=>$count,'countf'=>$countf
        ));
    }


    public function ShowmobileAction()
    {
        $em = $this->get('doctrine.orm.entity_manager');
        if(isset($_GET['region'])){
            $services = $em->getRepository('ServiceBundle:Service')
                ->findByRegion($_GET['region']);
        }
        else
            $services = $em->getRepository('ServiceBundle:Service')
                ->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($services);
        return new JsonResponse($formatted);

    }
    public function showmobAction(Service $service)
    {

        $task = $this->getDoctrine()->getManager()
            ->getRepository('ServiceBundle:Service')
            ->find($service);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($task);
        return new JsonResponse($formatted);

    }
    public function findByRegion($region)
    {
        $query = $this->getEntityManager()
            ->createQuery("SELECT s FROM ServiceBundle:Service WHERE s.region like ':r'")
            ->setParameter('r', "%" . $region . "%");
        return $query->getResult();
    }
    public function findByname($nom)
    {

        $query = $this->getEntityManager()
            ->createQuery("SELECT s FROM ServiceBundle:Service WHERE r.nomService like ':r'")
            ->setParameter('r', "%" . $nom . "%");
        return $query->getResult();

    }

    public function recheAction(Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $ev = $em->getRepository('ServiceBundle:Service')->findByRegion($request->get('region'));
        $normalizer=new ObjectNormalizer();
        $serializer=new Serializer(array(new DateTimeNormalizer(),$normalizer));
        $data=$serializer->normalize($ev,null,array('attributes'=>array('eventId','libelle','description',"dateDebut","dateFin"
        ,"image",'associationId','capacite')));
        return new JsonResponse($data);

    }

}
