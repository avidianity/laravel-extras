<?php

namespace Avidianity\LaravelExtras\Rules;

use Illuminate\Contracts\Validation\Rule;
use League\ISO3166\ISO3166;
use Throwable;

class CountryCodeRule implements Rule
{
    public function passes($attribute, $value)
    {
        $validator = new ISO3166;
        try {
            $validator->alpha2($value);

            return true;
        } catch (Throwable $_) {
            try {
                $validator->alpha3($value);
                return true;
            } catch (Throwable $_) {
                return false;
            }
            return false;
        }
    }

    public function message()
    {
        return ':attribute is not a valid country code.';
    }
}
