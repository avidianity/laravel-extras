<?php

namespace Avidianity\LaravelExtras\Rules;

use Avidianity\LaravelExtras\Traits\Makeable;
use Illuminate\Contracts\Support\Arrayable;

class PictureRule implements Arrayable
{
    use Makeable;

    public function __construct(
        protected bool $required = true,
    ) {
    }

    protected function getRequiredRule()
    {
        return $this->required ? 'required' : 'nullable';
    }

    public function toArray()
    {
        return [
            $this->getRequiredRule(),
            'file',
            'mimes:png,jpg,jpeg,gif,svg,webp',
        ];
    }
}
