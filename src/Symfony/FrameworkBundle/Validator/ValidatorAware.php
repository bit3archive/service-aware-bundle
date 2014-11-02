<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Validator;

use Symfony\Component\Validator\Validator\ValidatorInterface;

abstract class ValidatorAware implements ValidatorAwareInterface
{
    /**
     * The validator.
     *
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * {@inheritdoc}
     */
    public function setValidator(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }
}
