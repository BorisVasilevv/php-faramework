<?php


namespace BorisVasilevv\router;
use BorisVasilevv\repository\BaseComponentInterface;
use BorisVasilevv\router\router\RequestFactory;

class Router extends BaseComponentInterface
{
    public array $rules=["index"=>"hello"];
    //кеу path value code ["index" => ["DefaultAction", "handler"], ]; handler это метод DefaultAction
    // "index" => fn ($request) => new TextResponse(""),
    public RequestFactory $requestFactory;

    public function init(): void
    {
        // TODO: Implement init() method.
    }

    public function run(): string //handle
    {

        $path = $_SERVER['QUERY_STRING'];
        $request = $this->requestFactory -> createRequest("GET", $path);


        foreach ($this->rules as $rule=>$handler)
        {
            if (preg_match($rule, $request->$path)!=0) {      //request

                $result = call_user_func($handler, $request);
                break;
            }
            if (empty($result)){
               return 0; //NotFoundResponse;
            }
            return $result;
        }
    }
}

// request fabric вместо path

//response fabric всё через контейнер корректно