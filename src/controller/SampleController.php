<?php

namespace vvelless\controller;

use vvelless\model\SampleModel;

class SampleController implements ControllerInterface {
    private $sampleService;

    public function __construct(/*$sampleService*/) {
//        $this->sampleService = $sampleService;
    }

    public function handleRequest($request) {
        // TODO обработать запрос
    }

    public function generateResponse($data)
    {
        // TODO сгенерировать ответ
    }

    public function sendResponse($response) {
        // TODO реализовать отправку ответа
    }

    public function index() {
        echo "HELLO WELL";
    }

    public function registration() {
        include ("registration.html");
    }

    public function store() {
        var_dump($_POST);
    }
}