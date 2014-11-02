<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Translator;

use Symfony\Component\Translation\TranslatorInterface;

trait TranslatorAwareTrait
{
    /**
     * The translator.
     *
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * {@inheritdoc}
     */
    public function setTranslator(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
}
