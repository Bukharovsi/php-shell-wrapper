<?php

namespace AdamBrett\ShellWrapper\Runners;

use AdamBrett\ShellWrapper\Command\CommandInterface;
use AdamBrett\ShellWrapper\ExitCodes;
use Runners\RunnerWithStandardOut;

class FakeRunner implements RunnerWithStandardOut, ReturnValue, StandardError
{
    private $outputValue;

    private $standardOutput;

    private $standardError;

    private $executedCommand;

    public function __construct($outputValue = ExitCodes::SUCCESS, $standardOutput = null, $standardError = null)
    {
        $this->outputValue = $outputValue;
        $this->standardOutput = $standardOutput;
        $this->standardError = $standardError;
    }

    public function run(CommandInterface $command)
    {
        $this->executedCommand = (string) $command;
        return $this->outputValue;
    }

    public function getReturnValue()
    {
        return $this->outputValue;
    }

    public function getStandardError()
    {
        return $this->standardError;
    }

    public function getStandardOut()
    {
        return $this->standardOutput;
    }

    public function getExecutedCommand()
    {
        return $this->executedCommand;
    }
}
