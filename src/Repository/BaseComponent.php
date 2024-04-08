<?php

namespace BorisVasilevv\Repository;
abstract class BaseComponent implements ComponentInterface{
    public function __construct(array $params){
        $this->init();
    }
}