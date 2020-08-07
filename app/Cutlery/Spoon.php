<?php

namespace App\Cutlery;

class Spoon
{
    protected $scooped = 0;

    public function scoop() : Spoon
    {
        $this->scooped += 1;
        return $this;
    }

    public function howManyScoops() : int
    {
        return $this->scooped;
    }
}