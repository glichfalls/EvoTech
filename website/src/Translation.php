<?php

namespace EvoTech;

use Symfony\Component\Translation\Loader\YamlFileLoader;
use Symfony\Component\Translation\Translator;
use Symfony\Contracts\Translation\TranslatorInterface;

class Translation
{

    private string $locale;
    private TranslatorInterface $translator;

    public function __construct($locale)
    {
        $this->locale = $locale;
        $translator = new Translator($locale);
        $translator->addLoader('yml', new YamlFileLoader());
        $translator->addResource('yml', sprintf('/translations/%s.yaml', $_SERVER['DOCUMENT_ROOT'], $locale), $locale);
        $translator->setFallbackLocales(['de']);
        $this->translator = $translator;
    }

    public function locale()
    {
        return $this->locale;
    }

    public function oppositeLocale()
    {
        if ($this->locale === 'de') {
            return 'en';
        } else {
            return 'de';
        }
    }

    public function t($path)
    {
        return $this->translator->trans($path);
    }

}