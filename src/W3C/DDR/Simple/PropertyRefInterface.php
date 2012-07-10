<?php

namespace W3C\DDR\Simple;

interface PropertyRefInterface
{
    const NULL_ASPECT = '__NULL';

    public function getLocalPropertyName();

    public function getAspectName();

    public function getNamespace();
}