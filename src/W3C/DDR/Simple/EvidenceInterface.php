<?php

namespace W3C\DDR\Simple;

interface EvidenceInterface
{
    public function exists($key);

    public function get($key);

    public function put($key, $value);
}