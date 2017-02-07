<?php

namespace AdamBrett\ShellWrapper\Runners;

use AdamBrett\ShellWrapper\Command\CommandInterface;


class System implements ReturnedValueRunner
{
    protected $returnValue;

    public function run(CommandInterface $command)
    {
        return system((string) $command, $this->returnValue);
    }

    public function getReturnValue()
    {
        return $this->returnValue;
    }
}
