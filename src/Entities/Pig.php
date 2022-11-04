<?php

namespace FarmAPI\Entities;

class Pig
{
    public function eat(string $food): string
    {
        return 'Mmm ' . $food;
    }
}