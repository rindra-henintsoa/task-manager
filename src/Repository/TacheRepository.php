<?php

namespace App\Repository;

use App\Entity\Tache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tache>
 */
class TacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tache::class);
    }

    // Nombre total de tâches par statut
    public function countTasksByStatus(): array
    {
        return $this->createQueryBuilder('t')
            ->select('t.status, COUNT(t.id) as count')
            ->groupBy('t.status')
            ->getQuery()
            ->getResult();
    }

    // Liste des tâches en retard (date de fin dépassée et non terminées)
    public function findOverdueTasks(): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.dateFin < :now')
            ->andWhere('t.status != :completed')
            ->setParameter('now', new \DateTime())
            ->setParameter('completed', 'terminé')
            ->getQuery()
            ->getResult();
    }

    // Statistiques par utilisateur (tâches en cours, terminées, en retard)
    public function getUserTaskStatistics(): array
    {
        return $this->createQueryBuilder('t')
            ->select('u.firstname, 
                      SUM(CASE WHEN t.status = :ongoing THEN 1 ELSE 0 END) as inProgress, 
                      SUM(CASE WHEN t.status = :completed THEN 1 ELSE 0 END) as completed, 
                      SUM(CASE WHEN t.dateFin < :now AND t.status != :completed THEN 1 ELSE 0 END) as overdue')
            ->join('t.utilisateurAssigne', 'u')
            ->groupBy('u.id')
            ->setParameter('ongoing', 'en cours')
            ->setParameter('completed', 'terminé')
            ->setParameter('now', new \DateTime())
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Tache[] Returns an array of Tache objects
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

    //    public function findOneBySomeField($value): ?Tache
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
