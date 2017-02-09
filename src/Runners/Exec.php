<?php

namespace AdamBrett\ShellWrapper\Runners;

use AdamBrett\ShellWrapper\Command\CommandInterface;

class Exec implements RunnerWithStandardOut
{
    protected $output;
    protected $returnValue;

    public function run(CommandInterface $command)
    {
        return exec($command, $this->output, $this->returnValue);
    }

    public function getStandardOut()
    {
        return $this->output;
    }

    public function getReturnValue()
    {
        return $this->returnValue;
    }
}
