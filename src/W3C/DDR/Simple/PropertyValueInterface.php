<?php

namespace W3C\DDR\Simple;

interface PropertyValueInterface
{
    function getDouble();

    function getLong();

    function getBoolean();

    function getInteger();

    function getEnumeration();

    function getFloat();

    function getPropertyRef();

    function getString();

    function exists();
}