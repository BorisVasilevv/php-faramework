<?php

namespace vvelless\model;

class SampleModel implements ModelInterface
{
    public function processData($data) {
        // Обработка данных
    }

    public function fetchData($query) {
        // Достать чето из бд
    }

    public function validateData($data)
    {
        // Провалидировать данные
    }
}