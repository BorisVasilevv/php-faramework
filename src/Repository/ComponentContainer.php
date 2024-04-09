<?php

namespace BorisVasilevv\Repository;

use BorisVasilevv\Exceptions\ContainerException;

class ComponentContainer extends BaseComponent implements ComponentInterface, ContainerInterface {
    private array $components =[];

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
        return false;
    }


    /**
     * @throws \ReflectionException
     * @throws ContainerException
     */
    private function resolve(string $id)
    {
        // Проверяем класс который хотим получить из контейнера
        $reflectClass = new \ReflectionClass($id);

        if(!$reflectClass->isInstantiable()){
            throw new ContainerException('Class "'.$id.'" is not instantiable');
        }
        // Получаем конструктор класса
        $constructor = $reflectClass->getConstructor();


        if(!$constructor){
            //return $reflectClass->newInstance();
            return new $id;
        }
        // Получаем конструктор класса
        $parameters = $constructor->getParameters();

        if(!$parameters){
            return new $id;
        }
        // Если параметр конструктора это класс пытаемся вызвать класс используя контейнер
        $dependencies = array_map(
            function(\ReflectionParameter $parameter) use ($id){
                $name = $parameter->getName();
                $type = $parameter->getType();

                if(! $type){
                    throw new ContainerException(
                        'Ошибка вызова класса"' .$id.'". Проблема с параметром "'.$name. '"'
                    );
                }

                if($type instanceof \ReflectionUnionType){
                    throw new ContainerException(
                        'Ошибка вызова класс"' .$id.'" параметр "'.$name. '" является объявлением нескольких типов данных  (union type)'
                    );
                }

                if($type instanceof \ReflectionNamedType && ! $type->isBuiltin()){
                    return $this->get($type->getName());
                }

                throw new ContainerException(
            'Ошибка вызова класс"' .$id.'" из-за неправильного параметра"'.$name. '"'
                );

            },
            $parameters
        );
        return $reflectClass->newInstanceArgs($dependencies);
    }

}





