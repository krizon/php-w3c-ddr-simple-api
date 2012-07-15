<?php

namespace W3C\DDR\Simple;

interface PropertyValueInterface
{
    public function getDouble();

    public function getLong();

    public function getBoolean();

    public function getInteger();

    public function getEnumeration();

    public function getFloat();

    public function getPropertyRef();

    public function getString();

    public function exists();
}