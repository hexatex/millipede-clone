<?php

class Event
{
    use HasCode;

    /** @var Closure */
    protected $on;

    /** @var Closure */
    protected $_detach;

    public function setOn(Closure $on): void
    {
        $this->on = $on;
    }

    /** @return mixed */
    public function trigger()
    {
       return ($this->on)();
    }

    public function setDetach(Closure $detach): void
    {
        $this->_detach = $detach;
    }

    public function detach(): void
    {
        ($this->_detach)();
    }
}
