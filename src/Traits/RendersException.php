<?php

namespace Avidianity\LaravelExtras\Traits;

trait RendersException
{
    public function render($request)
    {
        $payload = [
            'key' => static::KEY,
            'message' => $this->getMessage(),
        ];

        if (property_exists($this, 'subKey') && !empty($this->subKey)) {
            $payload['sub_key'] = $this->subKey;
        }

        return response()->json($payload, static::STATUS_CODE);
    }
}
