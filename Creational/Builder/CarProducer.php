<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

class CarProducer
{
    /**
     * @var CarBuilderInterface
     */
    private $Builder;

    public function __construct(CarBuilderInterface $builder)
    {
        $this->Builder = $builder;
    }

    public function produceCar():Car
    {
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addEngine();
        $this->Builder->addDoor();
        $this->Builder->addWheel();
        return $this->Builder->getCar();
    }
}