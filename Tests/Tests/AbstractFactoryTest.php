<?php

namespace Tests;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(52460);

        $myCar = $carFactory->createBMWCar();

        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(100000);

        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class,$myCar);
    }
}