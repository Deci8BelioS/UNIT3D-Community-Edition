<?php

declare(strict_types=1);
/**
 * NOTICE OF LICENSE.
 *
 * UNIT3D Community Edition is open-sourced software licensed under the GNU Affero General Public License v3.0
 * The details is bundled with this project in the file LICENSE.txt.
 *
 * @project    UNIT3D Community Edition
 *
 * @author     HDVinnie <hdinnovations@protonmail.com>
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html/ GNU Affero General Public License v3.0
 */

/**
 * @see App\Console\Commands\AutoNerdStat
 */

use Database\Seeders\BotsTableSeeder;
use Database\Seeders\ChatroomTableSeeder;
use Database\Seeders\UsersTableSeeder;

it('runs successfully', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $this->seed(UsersTableSeeder::class);
    $this->seed(ChatroomTableSeeder::class);
    $this->seed(BotsTableSeeder::class);

    $this->artisan('auto:nerdstat')
        ->assertExitCode(0)
        ->run();
});
