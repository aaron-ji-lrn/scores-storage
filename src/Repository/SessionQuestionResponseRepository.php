<?php

namespace App\Repository;

use App\Entity\SessionQuestionResponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SessionQuestionResponse|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionQuestionResponse|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionQuestionResponse[]    findAll()
 * @method SessionQuestionResponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionQuestionResponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionQuestionResponse::class);
    }

    // /**
    //  * @return SessionQuestionResponse[] Returns an array of SessionQuestionResponse objects
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
    public function findOneBySomeField($value): ?SessionQuestionResponse
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
