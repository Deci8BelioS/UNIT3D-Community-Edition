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

use App\Http\Requests\UpdateTorrentRequestRequest;

beforeEach(function (): void {
    $this->subject = new UpdateTorrentRequestRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    expect($actual)->toBeTrue();
});

test('rules', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name' => [
            'required',
            'max:180',
        ],
        'imdb' => [
            'required',
            'numeric',
        ],
        'tvdb' => [
            'required',
            'numeric',
        ],
        'tmdb' => [
            'required',
            'numeric',
        ],
        'mal' => [
            'required',
            'numeric',
        ],
        'igdb' => [
            'required',
            'numeric',
        ],
        'category_id' => [
            'required',
            'exists:categories,id',
        ],
        'type_id' => [
            'required',
            'exists:types,id',
        ],
        'resolution_id' => [
            'nullable',
            'exists:resolutions,id',
        ],
        'description' => [
            'required',
            'string',
        ],
        'anon' => [
            'required',
            'boolean',
        ],
    ], $actual);
});
