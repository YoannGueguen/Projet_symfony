<?php
/**
 * Created by PhpStorm.
 * User: yoann
 * Date: 15/12/2017
 * Time: 09:30
 */

namespace AppBundle\EventListener;


use AppBundle\Entity\charge;
use AppBundle\Entity\piece_jointe;
use Doctrine\ORM\Event\LifecycleEventArgs;

class ChargeListener
{
public function PostRemove(LifecycleEventArgs $args){
    $entity = $args->getEntity();

    if ($entity instanceof charge) {
        $chargepj = $entity->getPjId();
        $piece_jointe = new piece_jointe();
        $piece_jointe->getId($chargepj);
            $em = $this->getDoctrine()->getManager();
            $em->remove($piece_jointe);
            $em->flush();
        }
    }

}