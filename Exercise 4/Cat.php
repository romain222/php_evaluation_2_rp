<?php

class Cat
{
    // private properties because we don't want them to be changed directly
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    // Cat constructor
    public function __construct($firstName, $age, $color, $sex, $race)
    {
        $this->setFirstName($firstName)->setAge($age)->setColor($color)->setSex($sex)->setRace($race);
    }
    
    // getInfo returns an associative array with every property of the class and its value as key value pair
    public function getInfo()
    {
        return [
            'firstName' => $this->getFirstName(),
            'age' => $this->getAge(),
            'color' => $this->getColor(),
            'sex' => $this->getSex(),
            'race' => $this->getRace()
        ];
    }
    
    // getters
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function getSex()
    {
        return $this->sex;
    }
    
    public function getRace()
    {
        return $this->race;
    }
    
    // setters with conditions
    public function setFirstName(string $firstName)
    {
        if(strlen($firstName) >= 3 && strlen($firstName) <= 20){
            $this->firstName = $firstName;
        }
        return $this;
    }
    
    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }
    
    public function setColor(string $color)
    {
        if(strlen($color) >= 3 && strlen($color) <= 10){
            $this->color = $color;
        }
        return $this;
    }
    
    public function setSex(string $sex)
    {
        if($sex === 'Male' || $sex === 'Female'){
            $this->sex = $sex;
        }
        return $this;
    }
    
    public function setRace(string $race)
    {
        if(strlen($race) >= 3 && strlen($race) <= 20){
            $this->race = $race;
        }
        return $this;
    }
}

