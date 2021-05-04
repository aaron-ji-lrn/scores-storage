<?php

namespace App\Repository;

use App\Entity\SessionItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SessionItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionItem[]    findAll()
 * @method SessionItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionItem::class);
    }

    // /**
    //  * @return SessionItem[] Returns an array of SessionItem objects
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
    public function findOneBySomeField($value): ?SessionItem
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
