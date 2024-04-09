<?php

namespace AlexaLeonid\Exceptions\Http;



use Exception;

class HttpException extends Exception
{
    protected string $view = "";

    public function getView(): void
    {
        include($this->view);
    }

    public function setView(string $view): self
    {
        $this->view = $view;
        return $this;
    }

    public function getErrorMessage(): string
    {
        return 'Http ошибка: ' . $this->getMessage();
    }
}






