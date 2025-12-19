<?php

namespace App\Controller;

use App\Entity\Camion;
use App\Entity\Kilometrage;
use App\Entity\TempAgence;
use App\Form\KilometrageType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KilometrageController extends AbstractController
{
    #[Route('/kilometrage', name: 'app_kilometrage')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $kilometrage = new Kilometrage();
        $user = $this->getUser();
        $tempagence = $em->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $id = $tempagence->getAgence()->getId();

        $form = $this->createForm(KilometrageType::class,$kilometrage);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $jour = $form->get('kilometrage_jour')->getData();
            $kilometrage->setUser($user);
            $kilometrage->setAgence($tempagence->getAgence());

            $status = $kilometrage->getKilometrageAlert();
            $kilometrage->setKilometrageAlert($status + $jour);

            $em->persist($kilometrage);
            $em->flush();

           return $this->redirectToRoute('app_kilometrage_list');
        }

        return $this->render('kilometrage/index.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }

    #[Route('/kilometrage/liste', name: 'app_kilometrage_list')]
    public function list(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $tempagence = $em->getRepository(TempAgence::class)->findOneBy(['user' => $user]);
        $id = $tempagence->getAgence()->getId();

        $kilometrage = $em->getRepository(Kilometrage::class)->findBy(['agence' => $id]);
        return $this->render('kilometrage/list.html.twig', [
            'kilometrages' => $kilometrage,
            'id' => $id,
        ]);

    }

    #[Route('/kilometrage/edit/{id}', name: 'app_kilometrage_edite')]
    public function Edit(EntityManagerInterface $em,Kilometrage $kilometrage): Response
    {
        $camoin = $em->getRepository(Camion::class)->findAll();
        if ($kilometrage) {
            return $this->render('kilometrage/edit.html.twig', [
                'kilometrages' => $kilometrage,
                'camions' => $camoin,
            ]);
        }
        return $this->redirectToRoute('app_kilometrage_list');
        
    }

    #[Route('/kilometrage/delete/{id}', name: 'app_kilometrage_delete')]
    public function delete(EntityManagerInterface $em,Kilometrage $kilometrage): Response
    {
        if ($kilometrage) {
           $em->remove($kilometrage);
           $em->flush(); 
        }
        return $this->redirectToRoute('app_kilometrage_list');
    }

    #[Route('/kilometrage/update', name: 'app_kilometrage_update')]
    public function update(EntityManagerInterface $em, Request $request): Response
    {
        $variable = $request->request->all('kilometrages');
        
        foreach ($variable as $key => $value) {
            $kilometrage = $em->getRepository(Kilometrage::class)->find($key);
            if ($kilometrage) {
                $jour = $kilometrage->getKilometrageJour();
                $alert = $kilometrage->getKilometrageAlert();

                $kilometrage->setKilometrageTotal($value['kilometragetotal'] ?? 0);
                $kilometrage->setKilometrageJour($value['kilometragejour'] ?? 0);
                $kilometrage->setTour($value['tour'] ?? 0);
                $kilometrage->setCamion($em->getRepository(Camion::class)->find($value['camion']));
                $kilometrage->setCreatetAt(new \DateTime($value['createtAt']));
                
                $alert = $alert - $jour;
                $alert = $alert + $value['kilometragejour'];

                $kilometrage->setKilometrageAlert($alert);

                $em->persist($kilometrage);
                $em->flush();
            }
        }
        
        return $this->redirectToRoute('app_kilometrage_list');
    }
}
