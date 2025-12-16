<?php

namespace App\Controller;

use App\Entity\Achat;
use App\Entity\Agence;
use App\Entity\Caisse;
use App\Entity\Depenses;
use App\Entity\Facture;
use App\Entity\Produit;
use App\Entity\TempAgence;
use App\Entity\User;
use App\Entity\Vente;
use App\Entity\Versement;
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

        if ($id == 0) {
            $somVente = $entityManager->getRepository(Vente::class)->findBySommeVente();
            $somAchat = $entityManager->getRepository(Achat::class)->findBySommeAchat();
            $somDette = $entityManager->getRepository(Vente::class)->findBySommeVenteCredit();
            $somversement = $entityManager->getRepository(Versement::class)->findBysommeversement();
            $somCaisse = $entityManager->getRepository(Caisse::class)->findBySommeCaisse();
            $somdepense = $entityManager->getRepository(Depenses::class)->findBySommeDepense();
        }else{
            $somVente = $entityManager->getRepository(Vente::class)->findBySommeVenteAgence($agence);
            $somAchat = $entityManager->getRepository(Achat::class)->findBySommeAchatAgence($agence);
            $somDette = $entityManager->getRepository(Vente::class)->findBySommeVenteCreditAgence($agence);
            $somversement = $entityManager->getRepository(Versement::class)->findBysommeversement();
            $somCaisse = $entityManager->getRepository(Caisse::class)->findBySommeCaisseAgence($agence);
            $somdepense = $entityManager->getRepository(Depenses::class)->findBySommeDepenseAgence($agence);
            $produitfacturer = $entityManager->getRepository(Facture::class)->findByProduitplusVendu($agence);
            $client = $entityManager->getRepository(Vente::class)->findBy20FirstClient($agence);
        }
        $produit = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'agence' => $agence,
            'tempagence' => $temoporayagence,
            'somvente' => $somVente,
            'someAchat' => $somAchat,
            'somDette' => $somDette,
            'somversement' => $somversement,
            'somCaisse' => $somCaisse,
            'somdepense' => $somdepense,
            'produits' => $produit,
            'produitvendu' => $produitfacturer,
            'clients' => $client,
        ]);
    }
}
