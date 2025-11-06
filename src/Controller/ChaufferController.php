<?php

namespace App\Controller;

use App\Entity\Chauffer;
use App\Entity\TempAgence;
use App\Form\ChaufferType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChaufferController extends AbstractController
{
    #[Route('/chauffer', name: 'app_chauffer')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();
        $chauffer = new Chauffer();
        $form = $this->createForm(ChaufferType::class,$chauffer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chauffer->setUser($user);
            $chauffer->setAgence($tempagence->getAgence());

            $entityManager->persist($chauffer);
            $entityManager->flush();

            return $this->redirectToRoute('app_chauffer_list');
        }

        return $this->render('chauffer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/chauffer/list', name: 'app_chauffer_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();

        $chauffer = $entityManager->getRepository(Chauffer::class)->findBy(['agence' => $agence]);
        return $this->render('chauffer/list.html.twig', [
            'id' => $agence,
            'chauffers' => $chauffer,
        ]);
    }

    #[Route('/chauffer/edit/{id}', name: 'app_chauffer_edit')]
    public function Edit(EntityManagerInterface $entityManager, Chauffer $chauffer,Request $request): Response
    {
        if ($chauffer) {
            return $this->render('chauffer/edit.html.twig', [
                'chauffeur' => $chauffer,
            ]); 
        }
            return $this->redirectToRoute('app_chauffer_list');
    }

    #[Route('/chauffer/delete/{id}', name: 'app_chauffer_delete')]
    public function delete(EntityManagerInterface $entityManager, Chauffer $chauffer): Response
    {
        if ($chauffer) {
            $entityManager->remove($chauffer);
            $entityManager->flush();
        }
       return $this->redirectToRoute('app_chauffer_list');
    }

    #[Route('/chauffer/update', name: 'app_chauffer_update')]
    public function Update(EntityManagerInterface $entityManager,Request $request): Response
    {
        
            return $this->redirectToRoute('app_chauffer_list');
    }

}
