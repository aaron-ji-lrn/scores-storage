<?php

namespace App\Repository;

use App\Entity\ScoreFeedback;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ScoreFeedback|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScoreFeedback|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScoreFeedback[]    findAll()
 * @method ScoreFeedback[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScoreFeedbackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScoreFeedback::class);
    }

    // /**
    //  * @return ScoreFeedback[] Returns an array of ScoreFeedback objects
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
    public function findOneBySomeField($value): ?ScoreFeedback
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
