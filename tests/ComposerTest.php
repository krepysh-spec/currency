<?php

declare(strict_types=1);

namespace KrepyshSpec\World\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;

class ComposerTest extends TestCase
{
    public function testComposer()
    {
        $process = Process::fromShellCommandline('composer validate');
        $code = $process->run();

        $this->assertEquals(0, $code, $process->getErrorOutput());
    }
}