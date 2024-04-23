<?php

namespace App\Repository;

use App\Entity\Vinylmix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vinylmix>
 *
 * @method Vinylmix|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vinylmix|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vinylmix[]    findAll()
 * @method Vinylmix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinylmixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vinylmix::class);
    }

//    /**
//     * @return Vinylmix[] Returns an array of Vinylmix objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vinylmix
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
