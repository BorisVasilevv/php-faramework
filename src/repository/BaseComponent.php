<?php

namespace vvelless\repository;
abstract class BaseComponent implements Component{
    public function __construct(array $params){
        $this->init();
    }
}