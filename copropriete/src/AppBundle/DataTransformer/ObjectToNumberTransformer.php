<?php

namespace AppBundle\DataTransformer;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

abstract class ObjectToNumberTransformer implements DataTransformerInterface
{
    private $em;
    protected $class;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Transforms an object (object) to a string (number).
     *
     * @param  Object|null $object
     * @return string
     */
    public function transform($object)
    {
        if (null === $object) {
            return '';
        }

        return $object->getId();
    }

    /**
     * Transforms a string (number) to an object (object).
     *
     * @param  string $objectNumber
     * @return void|object
     * @throws TransformationFailedException if object (object) is not found.
     */
    public function reverseTransform($objectNumber)
    {
        // no object number? It's optional, so that's ok
        if (!$objectNumber) {
            return;
        }

        /** @var Object $object */
        $object = $this->em
            ->getRepository($this->class)
            // query for the object with this id
            ->find($objectNumber)
        ;

        if (null === $object) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An object with number "%s" does not exist!',
                $objectNumber
            ));
        }

        return $object;
    }
}