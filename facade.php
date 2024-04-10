<?php 

class WorkerFacade 
{
    private Developer $developer;
    private Designer $designer;

    public function __construct(Developer $developer, Designer $designer) {
        $this->developer = $developer;
        $this->designer = $designer;
    }

    public function startWork()
    {
        $this->developer->startDevelop();
        $this->designer->startDesigning();
    }

    public function stopWork()
    {
        $this->developer->stopDevelop();
        $this->designer->stopDesigning();
    }
}

class Developer
{
    public function startDevelop()
    {
        print_r('start develop' . PHP_EOL);
    }

    public function stopDevelop()
    {
        print_r('stop develop' . PHP_EOL);
    }
}

class Designer 
{
    public function startDesigning()
    {
        print_r('start Designing' . PHP_EOL);
    }

    public function stopDesigning()
    {
        print_r('stop Designing' . PHP_EOL);
    }

}

$developer = new Developer();
$designer = new Designer();

$workerFacade = new WorkerFacade($developer, $designer);

$workerFacade->startWork();