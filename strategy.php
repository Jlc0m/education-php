<?php

interface Definer 
{
    public function define($arg): string;
}

class Data 
{
    private Definer $definer;
    private int|string|bool $arg;

    public function __construct(Definer $definer) {
        $this->definer = $definer;
    }

    public function executeStrategy()
    {
        return $this->definer->define($this->arg);
    }

    /**
     * Set the value of arg
     *
     * @return  self
     */ 
    public function setArg($arg)
    {
        $this->arg = $arg;

        return $this;
    }
}

class IntDefinerStrategy implements Definer
{
    public function define($arg): string
    {
        return $arg . ' this arg from int strategy!';
    }
}

class StringDefinerStrategy implements Definer
{
    public function define($arg): string
    {
        return $arg . "this arg from string strategy!";
    }
}

class BoolDefinerStrategy implements Definer
{
    public function define($arg): string
    {
        return $arg . "this arg from bool strategy!";
    }
}

$data = new Data(new IntDefinerStrategy());

$data->setArg('heloo');

var_dump($data->executeStrategy());
