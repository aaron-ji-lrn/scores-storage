<?php

namespace App\Repository;

use App\Entity\ResponseScores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResponseScores|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResponseScores|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResponseScores[]    findAll()
 * @method ResponseScores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResponseScoresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResponseScores::class);
    }

    // /**
    //  * @return ResponseScores[] Returns an array of ResponseScores objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResponseScores
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
