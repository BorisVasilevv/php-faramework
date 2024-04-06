<?php

namespace BorisVasilevv\repository;

interface Container{
    public function has(string $key): bool;
    public function get(string $key): mixed;

   }
