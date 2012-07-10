<?php

namespace W3C\DDR\Simple;

use W3C\DDR\Simple\PropertyRefInterface;

interface PropertyValuesInterface
{
    /**
     * @return PropertyValueInterface[]
     */
    public function getAll();

    /**
     * @param PropertyRefInterface $prop
     * @return PropertyRefInterface
     */
    public function getValue(PropertyRefInterface $prop);
}