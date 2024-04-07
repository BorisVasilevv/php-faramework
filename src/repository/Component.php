<?php

namespace vvelless\repository;
interface Component{
    public function __construct(array $params);
    public function init():void;
}