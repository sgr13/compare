<?php

namespace DinoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use DinoBundle\Entity\DinoData;
use DinoBundle\Form\DinoDataType;
use Symfony\Component\HttpFoundation\Response;

class DinosaurController extends Controller
{
    /**
     * @Route("/addDino")
     */
    public function addDinoAction(Request $request)
    {   
        $dino = new DinoData();
        $rootPath = $request->server->get('DOCUMENT_ROOT').$request->getBasePath();
        $form = $this->createForm(DinoDataType::class, $dino);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            
            $dino = $this->getDoctrine()->getRepository('DinoBundle:DinoData')->getDinoData($dino = $form->getData(), $rootPath);
            $em = $this->getDoctrine()->getManager();
//            dump($dino);die;
            $em->persist($dino);
            $em->flush();
            return new Response("Dodano nowego Dinozaura");
        }
        
        return $this->render('DinoBundle:Dinosaur:add_dino.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/editDino")
     */
    public function editDinoAction()
    {
        return $this->render('DinoBundle:Dinosaur:edit_dino.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteDino")
     */
    public function deleteDinoAction()
    {
        return $this->render('DinoBundle:Dinosaur:delete_dino.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/showAll")
     */
    public function showAllAction()
    {
        return $this->render('DinoBundle:Dinosaur:show_all.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/changePhoto")
     */
    public function changePhotoAction()
    {
        return $this->render('DinoBundle:Dinosaur:change_photo.html.twig', array(
            // ...
        ));
    }

}
