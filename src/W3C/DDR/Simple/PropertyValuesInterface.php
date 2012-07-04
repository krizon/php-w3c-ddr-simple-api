<?php

namespace W3C\DDR\Simple;

use W3C\DDR\Simple\PropertyRefInterface;

interface PropertyValuesInterface
{
    public function getAll();

    public function getValue(PropertyRefInterface $prop);
}