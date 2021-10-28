<?php

namespace App\Repository;

use App\Entity\Hizmet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hizmet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hizmet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hizmet[]    findAll()
 * @method Hizmet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HizmetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hizmet::class);
    }

    // /**
    //  * @return Hizmet[] Returns an array of Hizmet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hizmet
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
