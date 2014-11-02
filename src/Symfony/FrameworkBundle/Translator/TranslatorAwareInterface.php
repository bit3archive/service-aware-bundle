<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator;

use Symfony\Component\Translation\TranslatorInterface;

interface TranslatorAwareInterface
{
    /**
     * Set the translator.
     *
     * @param TranslatorInterface $translator The translator.
     *
     * @api
     */
    public function setTranslator(TranslatorInterface $translator);
}
