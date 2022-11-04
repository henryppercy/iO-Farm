<?php

namespace FarmAPI\Entities;

class Pig
{
    private int $is;
    private string $name;
    private float $weight;
    private string $colour;
    private int $species;

    public function eat(string $food): string
    {
        return 'Mmm ' . $food;
    }
}