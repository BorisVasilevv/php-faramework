<?php

namespace BorisVasilevv\repository;
abstract class BaseComponent implements ComponentInterface{
    public function __construct(array $params){
        $this->init();
    }
}