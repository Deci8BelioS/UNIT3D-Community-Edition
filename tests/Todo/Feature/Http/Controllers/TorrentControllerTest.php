<?php

namespace Tests\Todo\Feature\Http\Controllers;

use PHPUnit\Framework\Attributes\Test;
use App\Models\Torrent;
use App\Models\User;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TorrentController
 */
class TorrentControllerTest extends TestCase
{
    #[Test]
    public function bump_torrent_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('bumpTorrent', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('Torrent Has Been Bumped To The Top Successfully!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function delete_torrent_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete(route('torrents.destroy', ['id' => $torrent->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withSuccess('Torrent Has Been Deleted!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function download_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('download', ['id' => $torrent->id]));

        $response->assertRedirect(withErrors('Your Ratio Is To Low To Download!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function download_check_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('download_check', ['id' => $torrent->id]));

        $response->assertOk();
        $response->assertViewIs('torrent.download_check');
        $response->assertViewHas('torrent');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    #[Test]
    public function edit_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('torrents.update', ['id' => $torrent->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    #[Test]
    public function edit_form_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrents.edit', ['id' => $torrent->id]));

        $response->assertOk();
        $response->assertViewIs('torrent.edit');
        $response->assertViewHas('categories');
        $response->assertViewHas('types');
        $response->assertViewHas('torrent');

        // TODO: perform additional assertions
    }

    #[Test]
    public function faceted_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('torrents/filter');

        $response->assertOk();
        $response->assertViewIs();

        // TODO: perform additional assertions
    }

    #[Test]
    public function filtered_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('torrents/filterSettings');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    #[Test]
    public function freeleech_token_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('freeleech_token', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('You Have Successfully Activated A Freeleech Token For This Torrent!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function grant_double_up_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrent_doubleup', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('Torrent DoubleUpload Has Been Adjusted!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function grant_f_l_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrent_fl', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('Torrent FL Has Been Adjusted!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function grant_featured_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrent_feature', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('Torrent Is Now Featured!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function history_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('history', ['id' => $torrent->id]));

        $response->assertOk();
        $response->assertViewIs('torrent.history');
        $response->assertViewHas('torrent');
        $response->assertViewHas('history');

        // TODO: perform additional assertions
    }

    #[Test]
    public function peers_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('peers', ['id' => $torrent->id]));

        $response->assertOk();
        $response->assertViewIs('torrent.peers');
        $response->assertViewHas('torrent');
        $response->assertViewHas('peers');

        // TODO: perform additional assertions
    }

    #[Test]
    public function reseed_torrent_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('reseed', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('A notification has been sent to all users that downloaded this torrent along with original uploader!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function similar_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrents.similar', ['category_id' => $torrent->category_id, 'tmdb' => $torrent->tmdb]));

        $response->assertOk();
        $response->assertViewIs('torrent.similar');
        $response->assertViewHas('user');
        $response->assertViewHas('personal_freeleech');
        $response->assertViewHas('torrents');
        $response->assertViewHas('tmdb');

        // TODO: perform additional assertions
    }

    #[Test]
    public function sticky_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrent_sticky', ['id' => $torrent->id]));

        $response->assertRedirect(withSuccess('Torrent Sticky Status Has Been Adjusted!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function torrent_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $torrent = Torrent::factory()->create();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrents.show', ['id' => $torrent->id]));

        $response->assertOk();
        $response->assertViewIs('torrent.show');
        $response->assertViewHas('torrent');
        $response->assertViewHas('comments');
        $response->assertViewHas('user');
        $response->assertViewHas('personal_freeleech');
        $response->assertViewHas('freeleech_token');
        $response->assertViewHas('meta');
        $response->assertViewHas('characters');
        $response->assertViewHas('total_tips');
        $response->assertViewHas('user_tips');
        $response->assertViewHas('client');
        $response->assertViewHas('featured');
        $response->assertViewHas('general');
        $response->assertViewHas('general_crumbs');
        $response->assertViewHas('video_crumbs');
        $response->assertViewHas('audio_crumbs');
        $response->assertViewHas('text_crumbs');
        $response->assertViewHas('video');
        $response->assertViewHas('audio');
        $response->assertViewHas('subtitle');
        $response->assertViewHas('settings');
        $response->assertViewHas('uploader');
        $response->assertViewHas('last_seed_activity');
        $response->assertViewHas('playlists');

        // TODO: perform additional assertions
    }

    #[Test]
    public function torrents_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrents.index'));

        $response->assertOk();
        $response->assertViewIs('torrent.index');
        $response->assertViewHas('personal_freeleech');
        $response->assertViewHas('repository');
        $response->assertViewHas('bookmarks');
        $response->assertViewHas('torrents');
        $response->assertViewHas('user');
        $response->assertViewHas('sorting');
        $response->assertViewHas('direction');
        $response->assertViewHas('links');

        // TODO: perform additional assertions
    }

    #[Test]
    public function upload_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('torrents.store'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withWarning('Torrent Description Preview Loaded!'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function upload_form_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('torrents.create'));

        $response->assertOk();
        $response->assertViewIs('torrent.create');
        $response->assertViewHas('categories');
        $response->assertViewHas('types');
        $response->assertViewHas('user');
        $response->assertViewHas('title');
        $response->assertViewHas('imdb');
        $response->assertViewHas('tmdb');

        // TODO: perform additional assertions
    }

    // test cases...
}
