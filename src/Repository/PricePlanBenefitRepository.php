<?php

namespace App\Repository;

use App\Entity\PricePlanBenefit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PricePlanBenefit>
 *
 * @method PricePlanBenefit|null find($id, $lockMode = null, $lockVersion = null)
 * @method PricePlanBenefit|null findOneBy(array $criteria, array $orderBy = null)
 * @method PricePlanBenefit[]    findAll()
 * @method PricePlanBenefit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PricePlanBenefitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PricePlanBenefit::class);
    }

//    /**
//     * @return PricePlanBenefit[] Returns an array of PricePlanBenefit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PricePlanBenefit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
