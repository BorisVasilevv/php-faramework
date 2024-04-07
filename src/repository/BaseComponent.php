<?php

namespace BorisVasilevv\Repository;
abstract class BaseComponent implements Component{
    public function __construct(array $params){
        $this->init();
    }
}