<?php

namespace BorisVasilevv\Repository;
interface ComponentInterface{
    public function __construct(array $params);
    public function init():void;
}