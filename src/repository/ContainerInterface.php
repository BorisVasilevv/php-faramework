<?php

namespace vvelless\repository;

interface ContainerInterface{
    public function has(string $key): bool;
    public function get(string $key);

   }
