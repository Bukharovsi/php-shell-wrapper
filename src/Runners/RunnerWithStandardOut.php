<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 01.02.17
 * Time: 12:58
 */

namespace Runners;


use AdamBrett\ShellWrapper\Runners\Runner;
use AdamBrett\ShellWrapper\Runners\StandardOut;

interface RunnerWithStandardOut extends Runner, StandardOut
{

}