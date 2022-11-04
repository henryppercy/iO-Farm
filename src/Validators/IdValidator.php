<?php

namespace FarmAPI\Validators;

class IdValidator
{

    public static function valid(int $id): bool
    {
        return $id > 0;
    }
}