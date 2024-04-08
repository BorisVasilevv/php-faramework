<?php

namespace vvelless\model;

interface ModelInterface
{
    public function fetchData($query); // получение данных из базы
    public function processData($data); // обработка данных
    public function validateData($data); // валидация данных
}