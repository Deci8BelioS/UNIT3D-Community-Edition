<?php

namespace Tests\Todo\Feature\Http\Controllers;

use PHPUnit\Framework\Attributes\Test;
use App\Models\Graveyard;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GraveyardController
 */
class GraveyardControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function destroy_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $graveyard = Graveyard::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('users.resurrections.destroy.destroy', ['user' => $user, 'resurrection' => $graveyard]));

        $response->assertRedirect(withSuccess('Resurrection Successfully Canceled!'));
        $this->assertModelMissing($graveyard);

        // TODO: perform additional assertions
    }

    #[Test]
    public function store_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $graveyard = Graveyard::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('users.resurrections.store', ['user' => $user]), [
            'torrent_id' => $graveyard->id,
        ]);

        $response->assertRedirect(withErrors('Torrent Resurrection Failed! This torrent is already pending a resurrection.'));

        // TODO: perform additional assertions
    }

    // test cases...
}
