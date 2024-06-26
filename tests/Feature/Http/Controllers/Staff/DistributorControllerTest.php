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

use App\Http\Controllers\Staff\DistributorController;
use App\Http\Requests\Staff\DestroyDistributorRequest;
use App\Http\Requests\Staff\StoreDistributorRequest;
use App\Http\Requests\Staff\UpdateDistributorRequest;
use App\Models\Distributor;
use App\Models\User;

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.distributors.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.create');

    // TODO: perform additional assertions
});

test('delete returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();
    $distributors = Distributor::factory()->times(3)->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.distributors.delete', [$distributor]));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.delete');
    $response->assertViewHas('distributors', $distributors);
    $response->assertViewHas('distributor', $distributor);

    // TODO: perform additional assertions
});

test('destroy validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        DistributorController::class,
        'destroy',
        DestroyDistributorRequest::class
    );
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->delete(route('staff.distributors.destroy', [$distributor]));

    $response->assertOk();
    $this->assertModelMissing($distributor);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.distributors.edit', [$distributor]));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.edit');
    $response->assertViewHas('distributor', $distributor);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributors = Distributor::factory()->times(3)->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('staff.distributors.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.index');
    $response->assertViewHas('distributors', $distributors);

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        DistributorController::class,
        'store',
        StoreDistributorRequest::class
    );
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();

    $response = $this->actingAs($user)->post(route('staff.distributors.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        DistributorController::class,
        'update',
        UpdateDistributorRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();
    $user = User::factory()->create();

    $response = $this->actingAs($user)->patch(route('staff.distributors.update', [$distributor]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
