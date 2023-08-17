<?php

namespace Creational\FactoryMethod;

use Creational\Builder\BMWCarBuilder;

class BMWBrandFactory implements BrandFactory
{

    public function buildBrand()
    {
        return new BMWBrand();
    }
}