<?php

namespace AlexaLeonid\Exceptions\Http;



use Exception;

class HttpException extends Exception
{

    protected string $view = "";

    public function getCod()
    {
        return $this->code;
    }
    public function getErrorMessage(): string
    {
        return $this->message;

    }

    public function getView(): string
    {
        return $this->view;
    }




}






