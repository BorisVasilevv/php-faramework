<?php


namespace BorisVasilevv\Exception;
use Psr\Container\NotFoundExceptionInterface;

class ComponentNotFoundException extends \Exception implements NotFoundExceptionInterface
{

}