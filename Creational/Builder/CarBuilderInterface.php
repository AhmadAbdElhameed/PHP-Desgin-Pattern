<?php

namespace Creational\Builder;

interface CarBuilderInterface
{
    public function createCar();

    public function addBody();
    public function addEngine();

    public function addDoor();

    public function addWheel();

    public function getCar();
}