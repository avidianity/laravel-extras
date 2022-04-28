<?php

namespace Avidianity\LaravelExtras\Rules;

use Illuminate\Contracts\Support\Arrayable;
use Stringable;

class VideoRule implements Arrayable, Stringable
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
        return $this->getRequiredRule() . '|file|mimes:flv,mp4,avi,mov,wmv';
    }

    public function toArray()
    {
        return [
            $this->getRequiredRule(),
            'file',
            'mimes:flv,mp4,avi,mov,wmv',
        ];
    }
}
