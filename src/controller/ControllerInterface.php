<?php

namespace vvelless\controller;

interface ControllerInterface
{
    public function handleRequest($request); // обработка запроса
    public function generateResponse($data); // передача данных
    public function sendResponse($response); // отправка ответа
}