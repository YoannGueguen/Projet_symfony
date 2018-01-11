<?php

namespace AppBundle\DataTransformer;

use AppBundle\Entity\Projet;

class ProjectToIDTransformer extends ObjectToNumberTransformer
{
    protected $class = Projet::class;
}