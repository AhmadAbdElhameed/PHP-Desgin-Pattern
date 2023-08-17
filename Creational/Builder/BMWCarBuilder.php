<?php

namespace Creational\Builder;

use Creational\Builder\Models\BMWCar;
use Creational\Builder\Models\Car;

class BMWCarBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        // TODO: Implement createCar() method.
        $this->type = new BMWCar();
    }

    public function addBody()
    {
        // TODO: Implement addBody() method.
        $this->type->setPart('Body','SUV');
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->type->setPart('Engine','V8');
    }

    public function addDoor()
    {
        // TODO: Implement addDoor() method.
        $this->type->setPart('Door','BM-doors');
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->type->setPart('Wheel','19inch');
    }

    public function getCar() : Car
    {
        // TODO: Implement getCar() method.
        return $this->type;
    }
}