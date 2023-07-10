<?php

namespace Tests\Unit\Console\Commands;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Console\Commands\AutoRecycleFailedLogins
 */
class AutoRecycleFailedLoginsTest extends TestCase
{
    #[Test]
    public function it_runs_successfully(): void
    {
        $this->artisan('auto:recycle_failed_logins')
            ->expectsOutput('Automated Purge Old Failed Logins Command Complete')
            ->assertExitCode(0)
            ->run();
    }
}
