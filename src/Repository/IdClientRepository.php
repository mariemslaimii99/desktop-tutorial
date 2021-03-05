<?php

namespace App\Repository;

use App\Entity\IdClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IdClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdClient[]    findAll()
 * @method IdClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdClient::class);
    }

    // /**
    //  * @return IdClient[] Returns an array of IdClient objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IdClient
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
