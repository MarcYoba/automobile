<?php

namespace App\Controller;

use App\Entity\Locataire;
use App\Entity\TempAgence;
use App\Form\LocataireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocataireController extends AbstractController
{
    #[Route('/locataire', name: 'app_locataire')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $locataire = new Locataire();

        $user  = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $id = $tempagence->getAgence()->getId();

        $form = $this->createForm(LocataireType::class,$locataire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $locataire->setUser($user);
            $locataire->setAgence($tempagence->getAgence());

            $entityManager->persist($locataire);
            $entityManager->flush();

            return $this->redirectToRoute('app_locataire_list');
        }
        return $this->render('locataire/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/location/list', name: 'app_locataire_list')]
    public function list(EntityManagerInterface $entityManager) : Response 
    {
        $user  = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $id = $tempagence->getAgence()->getId();

        $locataire = $entityManager->getRepository(Locataire::class)->findBy(['agence'=>$id]);
       return $this->render('locataire/list.html.twig', [
            'locataires' => $locataire,
            'id' => $id,
        ]); 
    }
}
