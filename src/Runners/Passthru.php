<?php

namespace AdamBrett\ShellWrapper\Runners;

use AdamBrett\ShellWrapper\Command\CommandInterface;

class Passthru implements ReturnedValueRunner
{
    protected $returnValue;

    public function run(CommandInterface $command)
    {
        return passthru((string) $command, $this->returnValue);
    }

    public function getReturnValue()
    {
        return $this->returnValue;
    }
}
