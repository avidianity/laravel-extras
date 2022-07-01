<?php

namespace Avidianity\LaravelExtras\Rules;

use Avidianity\LaravelExtras\Traits\Makeable;
use Illuminate\Contracts\Validation\InvokableRule;

class MultipleExistsRule implements InvokableRule
{
    use Makeable;

    public function __construct(
        protected array $rules
    ) {
        //
    }

    public function __invoke($attribute, $value, $fail)
    {
        foreach ($this->rules as $key => $model) {
            if (!is_string($key)) {
                $key = $attribute;
            }

            if ($model::query()->where($key, $value)->exists()) {
                return $fail("The selected $attribute is invalid.");
            }
        }
    }
}
