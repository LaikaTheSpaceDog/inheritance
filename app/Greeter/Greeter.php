<?php

namespace App\Greeter;

use App\Languages\Language;

class Greeter
{
    protected $language;
    
    public function __construct(Language $language)
    {
        $this->language = $language;
    }
    
    public function greet(string $name) : string
    {
        return "{$this->language->hello()} {$name}";
    }

} 