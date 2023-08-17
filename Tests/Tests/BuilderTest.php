<?php

namespace Tests;

use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;
class BuilderTest extends TestCase
{
    public function testCanProduceBMWCar()
    {
        $bmwBuilder = new BMWCarBuilder();

        $carProducer = new CarProducer($bmwBuilder);

        $mycar = $carProducer->produceCar();

        $this->assertInstanceOf(BMWCar::class,$mycar);
    }
    public function testCanProduceBenzCar()
    {
        $benzBuilder = new BenzCarBuilder();

        $carProducer = new CarProducer($benzBuilder);

        $mycar = $carProducer->produceCar();

        $this->assertInstanceOf(BenzCar::class,$mycar);
    }
}