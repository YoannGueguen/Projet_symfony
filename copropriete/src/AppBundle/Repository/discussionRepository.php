<?php

namespace AppBundle\Repository;
use AppBundle\Entity\message;

/**
 * discussionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class discussionRepository extends \Doctrine\ORM\EntityRepository
{
    /*
     * @parameter message
     *
     */
    public function findUsersByMessage(message $message){
        $message->getDiscussionId();
        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder
            ->where('a.id = :id_discu')
            ->setParameter('id_discu', $message->getDiscussionId())
            ->addSelect()
            ->distinct();
        //on récup la requête
        $query = $queryBuilder->getQuery();
        $res = $query->getResult();
        return $res;
    }

    public function findArchives(){
        $queryBuilder = $this->createQueryBuilder('a');
        $queryBuilder
            ->where('a.archive = :is_archived')
            ->setParameter('is_archived', 1);
        //on récup la requête
        $query = $queryBuilder->getQuery();
        $res = $query->getResult();
        return $res;
    }
}
