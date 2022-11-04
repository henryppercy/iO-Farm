<?php

namespace FarmAPI\Entities;

class Pig implements \JsonSerializable
{
    private int $id;
    private string $name;
    private float $weight;
    private string $colour;
    private int $species;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     */
    public function setColour(string $colour): void
    {
        $this->colour = $colour;
    }

    /**
     * @return int
     */
    public function getSpecies(): int
    {
        return $this->species;
    }

    /**
     * @param int $species
     */
    public function setSpecies(int $species): void
    {
        $this->species = $species;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getname(),
            'weight' => $this->getWeight(),
            'colour' => $this->getColour(),
            'species' => $this->getSpecies(),
        ];
    }
}