<?php

namespace BorisVasilevv\Exceptions;
use Psr\Container\NotFoundExceptionInterface;

class ComponentNotFoundException extends \Exception implements NotFoundExceptionInterface
{

}