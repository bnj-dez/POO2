<?php


require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $capacity = 100;

    private $chargement = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getCapacity(): int
    {
        return $this-> $capacity;
    }

    public function setCapacity($capacity)
    {
        $this-> capacity = $capacity;
    }


    public function setChargement($chargement): void
    {
        $this-> chargement = $chargement;
    }

    public function getChargement(): int
    {
        return $this->chargement;
    }

    public function fillin(): string
    {
        $sentence = "";
        while ($this->chargement < $this->capacity) {
            $this->chargement+=10;
            $sentence .= "fill in<br>";

        }
        $this->chargement = 100;
        $sentence .= "I'm full !";
        return $sentence;
    }
}