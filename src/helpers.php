<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

if (!function_exists('isBase64')) {
    /**
     * Check if a given string is valid base64 payload
     *
     * @param string $string
     * @return boolean
     */
    function isBase64(string $string): bool
    {
        if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $string)) return false;

        $decoded = base64_decode($string, true);
        if (false === $decoded) return false;

        if (base64_encode($decoded) !== $string) return false;

        return true;
    }
}

if (!function_exists('newModelNotFound')) {
    /**
     * Manually create a ModelNotFoundException
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    function newModelNotFound(Model $model): ModelNotFoundException
    {
        return (new ModelNotFoundException)->setModel(
            get_class($model),
            $model->getKey()
        );
    }
}

if (!function_exists('randomColorPart')) {
    /**
     * Generates a random partial color hex value
     *
     * @return string
     */
    function randomColorPart(): string
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('randomColor')) {
    /**
     * Generates a random color hex value
     *
     * @return string
     */
    function randomColor(): string
    {
        return '#' . randomColorPart() . randomColorPart() . randomColorPart();
    }
}

if (!function_exists('base64UrlEncode')) {
    /**
     * @param string $value
     * @return string
     */
    function base64UrlEncode($value): string
    {
        return rtrim(strtr(base64_encode($value), '+/', '-_'), '=');
    }
}

if (!function_exists('toBoolean')) {
    /**
     * @param mixed $value
     * @return boolean
     */
    function toBoolean($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }
}

if (!function_exists('otp')) {
    /**
     * Generate a 6-digit otp code
     *
     * @param  int $size
     * @return string
     */
    function otp(int $size): string
    {
        return Str::limit((string)mt_rand(111111, 999999), $size, '');
    }
}
