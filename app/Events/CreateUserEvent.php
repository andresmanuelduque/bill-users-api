<?php

namespace App\Events;

class CreateUserEvent extends Event
{

    public $payload;

    public function __construct(Array $payload)
    {
        $this->payload = $payload;
    }
}
