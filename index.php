<?php

class Vertebrate
{
    public function __construct()
    {
        $this->printType();
    }

    protected function printType()
    {
        echo "Sono un animale Vertebrato\n";
    }
}


class WarmBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded()
    {
        echo "Sono un animale a Sangue Caldo\n";
    }
}


class ColdBlooded extends Vertebrate
{
    public function __construct()
    {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded()
    {
        echo "Sono un animale a Sangue Freddo\n";
    }
}


class Mammal extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printMammal();
    }

    protected function printMammal()
    {
        echo "Roar!\n";
    }
}


class Bird extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printBird();
    }

    protected function printBird()
    {
        echo "Cip Cip!\n";
    }
}


class Fish extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish()
    {
        echo "Splash!\n";
    }
}

class Reptile extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printReptile();
    }

    protected function printReptile()
    {
        echo "Hiss!\n";
    }
}

class Amphibian extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printAmphibian();
    }

    protected function printAmphibian()
    {
        echo "Ribbit!\n";
    }
}


$magikarp = new Fish();
