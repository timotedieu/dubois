<?php

namespace App\Repository;

use App\Entity\FournisseurType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FournisseurType>
 *
 * @method FournisseurType|null find($id, $lockMode = null, $lockVersion = null)
 * @method FournisseurType|null findOneBy(array $criteria, array $orderBy = null)
 * @method FournisseurType[]    findAll()
 * @method FournisseurType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournisseurTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FournisseurType::class);
    }

//    /**
//     * @return FournisseurType[] Returns an array of FournisseurType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FournisseurType
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
