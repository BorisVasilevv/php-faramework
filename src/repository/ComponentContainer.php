<?php

namespace vvelless\repository;



class ComponentContainer extends BaseComponent implements Component{
    private array $components =[];
    private array $config;

    public function init(): void
    {
        // TODO: Implement init() method.
    }

    public function get(string $id)
    {
        if(array_key_exists($id, $this->components)){
            return $this->components[$id];
        }
        if(!isSet($this->config[$id])){
            throw new \Exception();// ComponentNotFoundException();
        }

        if(!isSet($this->config[$id]['class'])){
            throw new \Exception();// LogicException();
        }
        $class = $this->config[$id]['class'];

        if(!class_exists($class)){
            throw Exception();
        }

        $params =$this->config[$id];
        unset($params['class']);

        $component = new $class($params);
        $this->components[$id] = $component;
        return $component;
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

}





