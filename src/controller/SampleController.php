<?php

namespace vvelless\controller;

use vvelless\model\SampleModel;

class SampleController implements ControllerInterface {
    private $sampleService;

    public function __construct($sampleService) {
        $this->sampleService = $sampleService;
    }

    public function handleRequest($request) {
        // Обработка запроса и вызов методов
        //$data = $this->sampleModel->processData($request);
        //$response = $this->sampleService->generateResponse($data);
        //$this->sendResponse($response);
    }

    public function generateResponse($data)
    {
        // Ну тут надо тоже чета делать..
    }

    public function sendResponse($response) {
        // Логика отправки ответа
    }
}