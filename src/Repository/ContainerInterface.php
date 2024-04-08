<?php

namespace BorisVasilevv\Repository;

interface ContainerInterface{
    public function has(string $key): bool;
    public function get(string $key);

   }
