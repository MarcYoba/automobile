<?php

namespace App\Controller;

use App\Entity\TempAgence;
use App\Entity\Transport;
use App\Form\TransportType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportController extends AbstractController
{
    #[Route('/transport', name: 'app_transport')]
    public function index(EntityManagerInterface $entityManager,Request $request): Response
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();

        $transport = new Transport();

        $form = $this->createForm(TransportType::class,$transport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vente = $form->get('vente')->getData();
            $achat = $form->get('achat')->getData();
            $transport->setVente($vente);
            $transport->setAchat($achat);
            $transport->setUser($user);
            $transport->setAgence($tempagence->getAgence());

            $entityManager->persist($transport);
            $entityManager->flush();

            return $this->redirectToRoute('app_transport_list');
        }

        return $this->render('transport/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/transport/list', name: 'app_transport_list')]
    public function List(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();

        $transport = $entityManager->getRepository(Transport::class)->findBy(['agence'=>$agence]);

        return $this->render('transport/list.html.twig', [
            'id' => $agence,
            'transports' => $transport,
        ]);
    }

    #[Route('/transport/edit/{id}', name: 'app_transport_edit')]
    public function Edit(EntityManagerInterface $entityManager): Response
    {

        return $this->render('transport/index.html.twig', [
            'controller_name' => 'TransportController',
        ]);
    }

    #[Route('/transport/update', name: 'app_transport_update')]
    public function update(): Response
    {
        return $this->render('transport/index.html.twig', [
            'controller_name' => 'TransportController',
        ]);
    }

    #[Route('/transport/delete/{id}', name: 'app_transport_delete')]
    public function delete(): Response
    {
        return $this->render('transport/index.html.twig', [
            'controller_name' => 'TransportController',
        ]);
    }
}
