<?php

namespace Avidianity\LaravelExtras\Rules;

use Illuminate\Contracts\Support\Arrayable;
use Stringable;

class PictureRule implements Arrayable, Stringable
{
    public function __construct(
        protected bool $required = true,
    ) {
    }

    protected function getRequiredRule()
    {
        return $this->required ? 'required' : 'nullable';
    }

    public function __toString(): string
    {
        return $this->getRequiredRule() . '|file|mimes:png,jpg,jpeg,gif,svg|between:1,10000';
    }

    public function toArray()
    {
        return [
            $this->getRequiredRule(),
            'file',
            'mimes:png,jpg,jpeg,gif,svg,webp',
            'between:0,10000',
        ];
    }
}
