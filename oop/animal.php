<?php

class Animal
{
    private $name, $legs, $cold_blooded;

    function __construct($name, $legs, $cold_blooded)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    function getName()
    {
        return $this->name;
    }

    function getLegs()
    {
        return $this->legs;
    }
    function getColdBlooded()
    {
        return $this->cold_blooded;
    }
}