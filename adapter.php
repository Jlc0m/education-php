<?php

interface NativeWorker
{
    public function countSalary(): int;
}

interface OutsorceWorker
{
    public function countSalaryByHour($hours): int;
}

class NativeDeveloper implements NativeWorker 
{
    public function countSalary(): int
    {
        return 3000;
    }
}

class OutsorceDeveloper implements OutsorceWorker 
{
    public function countSalaryByHour($hours): int 
    {
        return $hours * 40;
    }
}

class OutsorceDeveloperAdapter implements NativeWorker 
{
    private OutsorceWorker $outsorceWorker;

    public function __construct(OutsorceWorker $outsorceWorker) {
        $this->outsorceWorker = $outsorceWorker;
    }

    public function countSalary(): int
    {
       return $this->outsorceWorker->countSalaryByHour(160);
    }
}

$nativeDeveloper = new NativeDeveloper();
$outsorceDeveloper = new OutsorceDeveloper();

$outsorceWorkerAdapter = new OutsorceDeveloperAdapter($outsorceDeveloper);

var_dump($outsorceWorkerAdapter->countSalary());