<?php

namespace App\Repository;

use App\Entity\Stock1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Stock1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stock1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stock1[]    findAll()
 * @method Stock1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Stock1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stock1::class);
    }

    // /**
    //  * @return Stock1[] Returns an array of Stock1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Stock1
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
