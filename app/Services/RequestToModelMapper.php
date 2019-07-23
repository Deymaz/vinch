<?php

namespace App\Services;

class RequestToModelMapper
{
    public static function map(object $model, array $requestData)
    {
        foreach ($requestData as $property => $value) {
            $model->{$property} = $value;
        }
    }
}
