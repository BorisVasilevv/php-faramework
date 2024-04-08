<?php

namespace BorisVasilevv\repository;

interface ContainerInterface{
    public function has(string $key): bool;
    public function get(string $key);

   }
