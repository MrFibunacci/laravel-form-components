<?php

namespace Okipa\LaravelFormComponents\Components\Traits;

use Illuminate\Support\Str;

trait HasId
{
    public function getId(null|string $locale = null, null|string $suffix = null): string|null
    {
        return $this->id ? $this->id
            . ($suffix ? '-' . Str::slug(Str::snake($suffix)) : '')
            . ($locale ? '-' . $locale : '') : null;
    }

    public function getDefaultId(null|string $prefix, null|string $locale = null, null|string $suffix = null): string
    {
        return Str::slug(Str::snake($prefix))
            . '-' . Str::slug(Str::snake($this->getNameWithArrayNotationConvertedInto('-'), '-'))
            . ($suffix ? '-' . Str::slug(Str::snake($suffix)) : '')
            . ($locale ? '-' . $locale : '');
    }
}
