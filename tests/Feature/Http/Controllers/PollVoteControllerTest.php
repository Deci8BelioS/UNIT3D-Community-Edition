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

use App\Http\Controllers\PollVoteController;
use App\Http\Requests\StorePollVoteRequest;
use App\Models\Poll;
use App\Models\User;

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $poll = Poll::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('polls.votes.index', [$poll]));

    $response->assertOk();
    $response->assertViewIs('poll.result');
    $response->assertViewHas('poll', $poll);
    $response->assertViewHas('total_votes');

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        PollVoteController::class,
        'store',
        StorePollVoteRequest::class
    );
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $poll = Poll::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('polls.votes.store', [$poll]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
