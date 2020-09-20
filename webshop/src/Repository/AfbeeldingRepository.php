<?php

namespace App\Repository;

use App\Entity\Afbeelding;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Afbeelding|null find($id, $lockMode = null, $lockVersion = null)
 * @method Afbeelding|null findOneBy(array $criteria, array $orderBy = null)
 * @method Afbeelding[]    findAll()
 * @method Afbeelding[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AfbeeldingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Afbeelding::class);
    }

    // /**
    //  * @return Afbeelding[] Returns an array of Afbeelding objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Afbeelding
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
