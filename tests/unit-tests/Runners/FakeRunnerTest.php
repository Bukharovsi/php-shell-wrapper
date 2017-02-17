<?php

namespace AdamBrett\ShellWrapper\Tests\Runners;


use AdamBrett\ShellWrapper\Command;
use AdamBrett\ShellWrapper\ExitCodes;
use AdamBrett\ShellWrapper\Runners\FakeReturnedValueRunner;

class FakeRunnerTest extends \PHPUnit_Framework_TestCase
{

    public function testExecution()
    {
        $runner = new FakeReturnedValueRunner();
        $returnedValue = $runner->run(new Command('ls'));

        static::assertEquals(0, $returnedValue);
        static::assertEquals(0, $runner->getReturnValue());
        static::assertEquals('ls', $runner->getExecutedCommand());
    }

    public function testOutputAndError()
    {
        $outMsg = 'in processing...';
        $errMsg = 'command terminated unexpectedly';
        $runner = new FakeReturnedValueRunner(ExitCodes::USER_TERMINATED, $outMsg, $errMsg);

        $runner->run(new Command('ls'));

        static::assertEquals('ls', $runner->getExecutedCommand());
        static::assertEquals($outMsg, $runner->getStandardOut());
        static::assertEquals($errMsg, $runner->getStandardError());
    }
}
