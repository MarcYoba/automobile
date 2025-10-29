<?php
// src/Service/ProductHistoryService.php

namespace App\Service;

use App\Entity\Produit;
use App\Entity\Historique;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class ProductHistoryService
{
    private EntityManagerInterface $entityManager;
    private LoggerInterface $logger;

    public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
    {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    /**
     * @CronJob("* * * * *")
     */
    public function saveDailyHistory(): bool
    {
        try {
            $products = $this->entityManager->getRepository(Produit::class)->findAll();
            $date = new \DateTime();
            $dateTime = new \DateTime('now', new \DateTimeZone('Africa/Douala'));
            $dateTime = $dateTime->format('H-i-s');
            foreach ($products as $product) {
                $history = new Historique();
                $history->setProduit($product);
                $history->setQuantite($product->getQuantite());
                $history->setCreatedAt(new \DateTime());
                $history->setHeurecameroun($dateTime);
                $history->setHeureserver(date("H-i-s"));
                $history->setAgance($product->getAgence());
                
                $this->entityManager->persist($history);
            }
            
            $this->entityManager->flush();
            $this->logger->info(sprintf('Historique sauvegardé pour %d produits', count($products)));
            
            return true;
            
        } catch (\Exception $e) {
            $this->logger->error('Erreur ProductHistoryService: ' . $e->getMessage());
            return false;
        }
    }
}