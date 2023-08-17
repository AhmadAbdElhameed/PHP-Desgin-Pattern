<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BenzCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('Body','Sedan');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('Engine','V6');
    }

    public function addDoor()
    {
        // TODO: Implement addDoor() method.
        $this->type->setPart('Door','4doors');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('Wheel','16inch');
    }

    public function getCar() : Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}