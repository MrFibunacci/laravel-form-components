<?php

namespace Okipa\LaravelFormComponents\Components\Traits;

trait HasPlaceholder
{
    public function getPlaceholder(null|string $label, null|string $locale = null): null|string
    {
        if ($this->placeholder === false) {
            return null;
        }
        if ($this->placeholder) {
            return $this->placeholder . ($locale ? ' (' . mb_strtoupper($locale) . ')' : '');
        }

        return $label ?: $this->getNameTranslationFromValidation($locale);
    }
}
