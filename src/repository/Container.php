<?php

namespace vvelless\repository;

interface Container{
    public function has(string $key): bool;
    public function get(string $key): mixed;

   }
