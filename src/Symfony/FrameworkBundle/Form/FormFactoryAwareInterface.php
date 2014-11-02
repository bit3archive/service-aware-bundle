<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Form;

use Symfony\Component\Form\FormFactoryInterface;

interface FormFactoryAwareInterface
{
    /**
     * Set the form factory.
     *
     * @param FormFactoryInterface $formFactory The form factory.
     *
     * @api
     */
    public function setFormFactory(FormFactoryInterface $formFactory);
}
