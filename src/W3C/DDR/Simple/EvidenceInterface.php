<?php

namespace W3C\DDR\Simple;

interface EvidenceInterface
{
    /**
     * @param string $key
     * @return boolean
     */
    function exists($key);

    /**
     * @param string $key
     * @return string
     */
    function get($key);

    /**
     * @param string $key
     * @param string $value
     */
    function put($key, $value);
}