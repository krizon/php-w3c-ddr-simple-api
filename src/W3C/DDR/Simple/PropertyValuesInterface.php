<?php

namespace W3C\DDR\Simple;

use W3C\DDR\Simple\PropertyRefInterface;

interface PropertyValuesInterface
{
    /**
     * @return PropertyValueInterface[]
     */
    function getAll();

    /**
     * @param PropertyRefInterface $prop
     * @return PropertyRefInterface
     */
    function getValue(PropertyRefInterface $prop);
}