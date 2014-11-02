<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Validator;

use Symfony\Component\Validator\Validator\ValidatorInterface;

interface ValidatorAwareInterface
{
    /**
     * Set the validator.
     *
     * @param ValidatorInterface $validator The validator.
     *
     * @api
     */
    public function setValidator(ValidatorInterface $validator);
}
