<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Employer;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    #[Route('/home/choix/agence', name: 'app_home_choix')]
    public function Choix_Agence(EntityManagerInterface $entityManager): Response
    {

        $agence = $entityManager->getRepository(Agence::class)->findAll();
        $user = $this->getUser();
        if ($user) {
            // $user = $user->getId();
            $user = $entityManager->getRepository(User::class)->find($user);
        }
        if ($this->isGranted("ROLE_ADMIN_ADMIN") || $this->isGranted("ROLE_CLIENTS")) {
            $agence = $entityManager->getRepository(Agence::class)->findAll();
        }else{
            $user = $this->getUser();
            $employer = $entityManager->getRepository(Employer::class)->findOneBy(['user' => $user]);
            $agence = $entityManager->getRepository(Agence::class)->findBy(['id'=>$employer->getAgence()->getId()]);
        }
        
        if($user->getLastLogin() === null) {
            $user->setLastLogin(new \DateTime());
            $entityManager->flush();
        }
        return $this->render('agence/choix.html.twig', [
            'agence' => $agence,
        ]);
    }
}
