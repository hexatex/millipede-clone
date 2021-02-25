<?php

trait HasCode
{
    /** @var string */
    protected $code;

    public function __construct()
    {
        $this->code = uniqid();
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
