<?php

namespace Tests\Todo\Unit\Console\Commands;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Console\Commands\AutoNerdStat
 */
class AutoNerdStatTest extends TestCase
{
    #[Test]
    public function it_runs_successfully(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $this->artisan('auto:nerdstat')
            ->expectsOutput('Automated Nerd Stat Command Complete')
            ->assertExitCode(0)
            ->run();
    }
}
