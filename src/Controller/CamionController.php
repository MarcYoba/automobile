<?php

namespace App\Controller;

use App\Entity\Camion;
use App\Entity\TempAgence;
use App\Form\CamionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class CamionController extends AbstractController
{
    #[Route('/camion', name: 'app_camion')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();

        $camion = new Camion();
        $form = $this->createForm(CamionType::class,$camion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $camion->setUser($user);
            $camion->setAgence($tempagence->getAgence());

            $entityManager->persist($camion);
            $entityManager->flush();

            return $this->redirectToRoute('app_camion_list');
        }

        return $this->render('camion/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/camion/list', name: 'app_camion_list')]
    public function list(EntityManagerInterface $entityManager) : Response 
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();

        $camion = $entityManager->getRepository(Camion::class)->findBy(['agence'=>$agence]);

        return $this->render('camion/list.html.twig', [
            'camions' => $camion,
            'id'=> $agence,
        ]);
    }

    #[Route('/camion/edit/{id}', name:'app_camion_edit')]
    public function Edit(EntityManagerInterface $entityManager,Request $request, Camion $camion) : Response 
    {
        $user = $this->getUser();
        $tempagence = $entityManager->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $agence = $tempagence->getAgence()->getId();

        return $this->render('camion/edit.html.twig', [
            'camion' => $camion,
        ]); 
    }

    #[Route('/camion/update', name: 'app_camion_update', methods:'POST')]
    public function Update(EntityManagerInterface $entityManager, Request $request) : Response 
    {
        $user = $this->getUser();
        $camion = $request->request->all('camoin');

        foreach ($camion as $key => $value) {
            $tablecamion = $entityManager->getRepository(Camion::class)->find($key);
            if ($tablecamion) {
                $tablecamion->setImmatriculation($value["immatriculation"] ?? 0);
                $tablecamion->setMarque($value["marque"] ?? 0);
                $tablecamion->setModele($value["modele"] ?? 0);
                $tablecamion->setType($value["type"] ?? 0);
                $tablecamion->setCapacite($value["capacite"] ?? 0);
                $tablecamion->setVolume($value["volume"] ?? 0);
                $tablecamion->setCarburant($value["carburant"] ?? 0);
                $tablecamion->setKilometrage($value["kilometrage"] ?? 0);
                $tablecamion->setEtat($value["etat"] ?? 0);
                $tablecamion->setLocalisation($value["localosation"] ?? 0);
                $tablecamion->setPrix($value["prix"] ?? 0);
                $tablecamion->setCreatetAt(new \DateTime($value["createtAt"]));
                $tablecamion->setUser($user);

                $entityManager->persist($tablecamion);
                $entityManager->flush();
            }
        }

       return $this->redirectToRoute('app_camion_list');
    }

    #[Route('/camion/delete/{id}', name: 'app_camion_delete')]
    public function delete(EntityManagerInterface $entityManager,Camion $camion) : Response 
    {
        if ($camion) {
            $entityManager->remove($camion);
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_camion_list');
    }
}
