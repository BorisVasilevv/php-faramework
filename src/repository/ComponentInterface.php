<?php

namespace BorisVasilevv\repository;
interface ComponentInterface{
    public function __construct(array $params);
    public function init():void;
}