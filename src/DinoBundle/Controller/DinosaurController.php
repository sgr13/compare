<?php

namespace DinoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use DinoBundle\Entity\DinoData;
use DinoBundle\Form\DinoDataType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DinosaurController extends Controller
{
    /**
     * @Route("/addDino", name="addDino")
     */
    public function addDinoAction(Request $request)
    {   
        $dino = new DinoData();
        $rootPath = $request->server->get('DOCUMENT_ROOT').$request->getBasePath();
        $form = $this->createForm(DinoDataType::class, $dino);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            
            $this->getDoctrine()->getRepository('DinoBundle:DinoData')->getDinoData($dino = $form->getData(), $rootPath);
            return new Response("Dodano nowego Dinozaura");
        }
        
        return $this->render('DinoBundle:Dinosaur:add_dino.html.twig', array(
            'form' => $form->createView()
        )); 
    }

    /**
     * @Route("/editDino/{id}", name="editDino")
     */
    public function editDinoAction(Request $request, $id)
    {   
        $dinoRepository = $this->getDoctrine()->getRepository('DinoBundle:DinoData');
        $dino = $dinoRepository->find($id);
        
        if (!$dino) {
            throw new NotFoundHttpException('Nie znaleziono dinozaura o podanym ID');
        }
        $form = $this->createForm(DinoDataType::class, $dino);
        $form->remove('firstPhoto')->remove('secondPhoto');
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $engLength = (string)$this->getDoctrine()->getRepository('DinoBundle:DinoData')->getEngLength($dino->getLength());
            $dino->setLengthEng($engLength);
            $dinoRepository->addToBase($dino);
            return $this->redirect('/showAll');
         }
                
        return $this->render('DinoBundle:Dinosaur:edit_dino.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/deleteDino", name="deleteDino")
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
        $dinos = $this->getDoctrine()->getRepository('DinoBundle:DinoData')->findAll();
//        dump($dinos);die;
        return $this->render('DinoBundle:Dinosaur:show_all.html.twig', array(
            'dinos' => $dinos
        ));
    }

    /**
     * @Route("/changePhoto/{id}", name="changePhoto")
     */
    public function changePhotoAction(Request $request, $id)
    {   
        $dinoRepository = $this->getDoctrine()->getRepository('DinoBundle:DinoData');
        $dino = $dinoRepository->find($id);
        
        if (!$dino) {
            throw new NotFoundHttpException('Nie znaleziono dinozaura o podanym ID');
        }
        
        $form = $this->createForm(DinoDataType::class, $dino);
        $form = $dinoRepository->onlyPhotoChange($form);
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $rootPath = $request->server->get('DOCUMENT_ROOT').$request->getBasePath();
            $dino = $form->getData();
            $dino->setFirstPhoto($dinoRepository->savePhoto($dino->getFirstPhoto(), $rootPath, $dino, 'first'));
            $dino->setSecondPhoto($dinoRepository->savePhoto($dino->getSecondPhoto(), $rootPath, $dino, 'second'));
            
            $dinoRepository->addToBase($dino);
            return $this->redirect('/showAll');
        }
        
        return $this->render('DinoBundle:Dinosaur:change_photo.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /**
     * @route("/showDino/{id}", name="showDino")
     */
    public function showDinoAction($id)
    {   
        $dino = $this->getDoctrine()->getRepository('DinoBundle:DinoData')->find($id);
        $weight = $this->getDoctrine()->getRepository('DinoBundle:DinoData')->getProperlyWeight($dino->getWeight());
        
        return $this->render('DinoBundle:Dinosaur:showDino.html.twig', array(
            'dino' => $dino,
            'weight' => $weight['weight'],
            'weightDescription' => $weight['description']
        ));
    }

}
