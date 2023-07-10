<?php

namespace Tests\Todo\Feature\Http\Controllers;

use PHPUnit\Framework\Attributes\Test;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TopicLabelController
 */
class TopicLabelControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function approve_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.approve', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function bug_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.bug', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function deny_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.deny', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function implement_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.implement', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function invalid_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.invalid', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function solve_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.solve', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    #[Test]
    public function suggest_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('topics.suggest', ['id' => $id]));

        $response->assertRedirect(withInfo('Label Change Has Been Applied'));

        // TODO: perform additional assertions
    }

    // test cases...
}
