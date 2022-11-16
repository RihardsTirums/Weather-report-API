<?php
class Data {
    public string $city;

    public function setCity(string $city): void {
        $this->city = $city;
    }
    public function getCity(): string{
        return $this->city;
    }
}