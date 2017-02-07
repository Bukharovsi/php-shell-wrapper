<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 01.02.17
 * Time: 12:58
 */

namespace AdamBrett\ShellWrapper\Runners;


interface ReturnedValueRunnerWithStreams extends ReturnedValueRunner, StandardOut, StandardError
{

}