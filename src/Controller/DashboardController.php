<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\TempAgence;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard/{id}', name: 'app_home_dashboard')]
    public function index(EntityManagerInterface $entityManager,string $id): Response
    {
        $user = $this->getUser();
        
        $agence = $entityManager->getRepository(Agence::class)->findAll();
            $temoporayagence = $entityManager->getRepository(TempAgence::class)->findOneBy(["user" => $user]);
            if ($temoporayagence) {
                $idagence = $entityManager->getRepository(Agence::class)->find($id);
                $temoporayagence->setGenerale(0);
                $temoporayagence->setAgence($idagence);
                $entityManager->flush();
            }else{
                $idagence = $entityManager->getRepository(Agence::class)->find($id);
                $temoporayagence = new TempAgence();
                $temoporayagence->setUser($user);
                $temoporayagence->setAgence($idagence);
                $temoporayagence->setGenerale(0);
                $entityManager->persist($temoporayagence);
                $entityManager->flush();
            }
        $user = $entityManager->getRepository(User::class)->find($user);
        $temoporayagence = $entityManager->getRepository(TempAgence::class)->findOneBy(["user" => $user]);
        if($user->getLastLogin() === null) {
            $user->setLastLogin(new \DateTime());
            $entityManager->flush();
        }

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'agence' => $agence,
            'tempagence' => $temoporayagence
        ]);
    }
}
