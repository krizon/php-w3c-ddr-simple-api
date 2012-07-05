<?php

namespace W3C\DDR\Simple;

interface EvidenceInterface
{
    /**
     * @param string $key
     * @return boolean
     */
    public function exists($key);

    /**
     * @param string $key
     * @return string
     */
    public function get($key);

    /**
     * @param string $key
     * @param string $value
     */
    public function put($key, $value);
}