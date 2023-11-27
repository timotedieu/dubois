<?php

namespace App\Repository;

use App\Entity\TypeFournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeFournisseur>
 *
 * @method TypeFournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeFournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeFournisseur[]    findAll()
 * @method TypeFournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeFournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeFournisseur::class);
    }

//    /**
//     * @return TypeFournisseur[] Returns an array of TypeFournisseur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeFournisseur
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
