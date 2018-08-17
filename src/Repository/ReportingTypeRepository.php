<?php

namespace App\Repository;

use App\Entity\ReportingType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReportingType|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReportingType|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReportingType[]    findAll()
 * @method ReportingType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReportingTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReportingType::class);
    }

//    /**
//     * @return ReportingType[] Returns an array of ReportingType objects
//     */
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
    public function findOneBySomeField($value): ?ReportingType
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
