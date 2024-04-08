<?php

namespace BorisVasilevv\Repository;

use BorisVasilevv\Exceptions\ContainerException;

class ComponentContainer extends BaseComponent implements ComponentInterface, ContainerInterface {
    private array $components =[];
    private array $config;

    public function init(): void
    {

    }

    public function get(string $id)
    {
        if($this->has($id)){
//            throw new ComponentNotFoundException('Class"'.$id.'" not found')    ;
            $entry = $this->components[$id];
            return $entry($this);
        }

        return $this->resolve($id);

    }

    public function has(string $id): bool
    {
        if(array_key_exists($id, $this->components)){
            return true;
        }

        if(array_key_exists($id, $this->config)){
            return true;
        }
        return false;
    }

    public function __construct(array $params){
        parent::__construct($params);
        $this->config = $params;
        $this->components = [];
    }

    /**
     * @throws \ReflectionException
     * @throws ContainerException
     */
    private function resolve(string $id)
    {
        // inspect the class that we are trying to get from container
        $reflectClass = new \ReflectionClass($id);

        if(!$reflectClass->isInstantiable()){
            throw new ContainerException('Class "'.$id.'" is not instantiable');
        }
        // Inspect the constructor of the class
        $constructor = $reflectClass->getConstructor();

        // Inspect the constructor parameters
        if(!$constructor){
            //return $reflectClass->newInstance();
            return new $id;
        }

        // Inspect the construction parameters
        $parameters = $constructor->getParameters();

        if(!$parameters){
            return new $id;
        }

        // If the constructor parameter is a class then try to resolve that class using the container
        $dependencies = array_map(
            function(\ReflectionParameter $parameter) use ($id){
                $name = $parameter->getName();
                $type = $parameter->getType();

                if(! $type){
                    throw new ContainerException(
                        'Failing to resolve class"' .$id.'". Parameter "'.$name. '" is missing a type hint'
                    );
                }

                if($type instanceof \ReflectionUnionType){
                    throw new ContainerException(
                        'Failing to resolve class"' .$id.'" because of union type for param "'.$name. '"'
                    );
                }

                if($type instanceof \ReflectionNamedType && ! $type->isBuiltin()){
                    return $this->get($type->getName());
                }

                throw new ContainerException(
            'Failing to resolve class"' .$id.'" because of invalid param "'.$name. '"'
                );

            },
            $parameters
        );
        return $reflectClass->newInstanceArgs($dependencies);
    }

}





