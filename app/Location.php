<?php
namespace App;

class Location
{
    private string $name;
    private float $latitude;
    private float $longitude;

    public function __construct(string $name,float $latitude, float $longitude)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }
}