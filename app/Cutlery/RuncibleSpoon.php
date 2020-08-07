<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{

    public function scoop() : Spoon
    {
        $this->scooped += 2;
        return $this;
    }

}