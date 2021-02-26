<?php

class Event
{
    use HasCode;

    /** @var ?Closure */
    protected $on;

    /** @var ?Closure */
    protected $_detach;

    public function setOn(Closure $on): void
    {
        $this->on = $on;
    }

    /** @return mixed|void */
    public function trigger()
    {
        if ($this->on) {
            return ($this->on)();
        }
    }

    public function setDetach(Closure $detach): void
    {
        $this->_detach = $detach;
    }

    public function detach(): void
    {
        if ($this->_detach) {
            ($this->_detach)();
        }
    }
}
