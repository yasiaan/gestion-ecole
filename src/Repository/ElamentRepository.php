<?php

namespace App\Repository;

use App\Entity\Elament;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Elament|null find($id, $lockMode = null, $lockVersion = null)
 * @method Elament|null findOneBy(array $criteria, array $orderBy = null)
 * @method Elament[]    findAll()
 * @method Elament[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElamentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Elament::class);
    }

    // /**
    //  * @return Elament[] Returns an array of Elament objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Elament
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
