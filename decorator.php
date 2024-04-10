<?php 

interface Worker 
{
    public function countSalary();
}

abstract class WorkerDecorator implements Worker
{
    public Worker $worker;

    public function __construct(Worker $worker) {
        $this->worker = $worker;
    }
}

class Developer implements Worker
{
    public function countSalary()
    {
        return 20 * 3000;
    }
}

class DeveloperOverTime extends WorkerDecorator
{
    public function countSalary()
    {
        return $this->worker->countSalary() + $this->worker->countSalary() * 0.2;
    }
}

$developer = new Developer();

$developerOverTime = new DeveloperOverTime($developer);

var_dump($developer->countSalary());
var_dump($developerOverTime->countSalary());
