<?php

namespace AlexaLeonid\Exceptions;



use Exception;

class HttpException extends Exception
{

    public function getCod()
    {
        return $this->code;
    }
    public function getErrorMessage(): string
    {
        return $this->message;

    }



}






