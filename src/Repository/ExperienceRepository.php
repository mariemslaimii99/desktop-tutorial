<?php

namespace App\Repository;

use App\Entity\Experience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Experience|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experience|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experience[]    findAll()
 * @method Experience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experience::class);
    }
    public function listOrderByDate()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Date', 'DESC')
            ->getQuery()->getResult();
    }
    public function listOrderByNote()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.Note', 'DESC')
            ->getQuery()->getResult();
    }
    // /**
    //  * @return Experience[] Returns an array of Experience objects
    //  */

    public function Recherche($value)
    {
        return $this->createQueryBuilder('e')
            ->Where('e.Titre LIKE :val')
            ->OrWhere('e.Description LIKE :val')
            ->OrWhere('e.endroit LIKE :val')
            ->setParameter('val', '%'.$value.'%')


            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Experience
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
