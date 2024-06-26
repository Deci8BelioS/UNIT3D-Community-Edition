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

use App\Models\Torrent;
use App\Models\User;
use App\Models\Wish;

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $wish = Wish::factory()->create();
    $authUser = User::factory()->create();

    $response = $this->actingAs($authUser)->delete(route('users.wishes.destroy', [$user, $wish]));

    $response->assertOk();
    $this->assertModelMissing($wish);

    // TODO: perform additional assertions
});

test('destroy aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $wish = Wish::factory()->create();
    $authUser = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->delete(route('users.wishes.destroy', [$user, $wish]));

    $response->assertForbidden();
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $authUser = User::factory()->create();

    $response = $this->actingAs($authUser)->get(route('users.wishes.index', [$user]));

    $response->assertOk();
    $response->assertViewIs('user.wish.index');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('wishes');
    $response->assertViewHas('route');

    // TODO: perform additional assertions
});

test('index aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $authUser = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->get(route('users.wishes.index', [$user]));

    $response->assertForbidden();
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $torrent = Torrent::factory()->create();
    $wish = Wish::factory()->create();
    $authUser = User::factory()->create();

    $response = $this->actingAs($authUser)->post(route('users.wishes.store', [$user]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store aborts with a 403', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $torrent = Torrent::factory()->create();
    $wish = Wish::factory()->create();
    $authUser = User::factory()->create();

    // TODO: perform additional setup to trigger `abort_unless(403)`...

    $response = $this->actingAs($authUser)->post(route('users.wishes.store', [$user]), [
        // TODO: send request data
    ]);

    $response->assertForbidden();
});

// test cases...
