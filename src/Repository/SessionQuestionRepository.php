<?php

namespace App\Repository;

use App\Entity\SessionQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SessionQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionQuestion[]    findAll()
 * @method SessionQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionQuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionQuestion::class);
    }

    // /**
    //  * @return SessionQuestion[] Returns an array of SessionQuestion objects
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
    public function findOneBySomeField($value): ?SessionQuestion
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
