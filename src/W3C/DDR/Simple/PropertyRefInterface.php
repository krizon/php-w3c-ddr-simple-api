<?php

namespace W3C\DDR\Simple;

interface PropertyRefInterface
{
    const NULL_ASPECT = '__NULL';

    function getLocalPropertyName();

    function getAspectName();

    function getNamespace();
}