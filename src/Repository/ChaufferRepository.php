<?php

namespace App\Repository;

use App\Entity\Chauffer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chauffer>
 *
 * @method Chauffer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chauffer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chauffer[]    findAll()
 * @method Chauffer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChaufferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chauffer::class);
    }

//    /**
//     * @return Chauffer[] Returns an array of Chauffer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Chauffer
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
