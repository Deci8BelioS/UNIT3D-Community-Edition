<?php

namespace Tests\Feature\Http\Controllers\Staff;

use PHPUnit\Framework\Attributes\Test;
use App\Models\Category;
use App\Models\Group;
use App\Models\User;
use Database\Seeders\GroupsTableSeeder;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\CategoryController
 */
class CategoryControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function createStaffUser(): \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
    {
        return User::factory()->create([
            'group_id' => fn () => Group::factory()->create([
                'is_owner' => true,
                'is_admin' => true,
                'is_modo'  => true,
            ])->id,
        ]);
    }

    #[Test]
    public function create_returns_an_ok_response(): void
    {
        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->get(route('staff.categories.create'));

        $response->assertOk();
        $response->assertViewIs('Staff.category.create');
    }

    #[Test]
    public function destroy_returns_an_ok_response(): void
    {
        $this->seed(GroupsTableSeeder::class);

        $category = Category::factory()->create();
        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->delete(route('staff.categories.destroy', ['category' => $category]));

        $response->assertRedirect(route('staff.categories.index'));
    }

    #[Test]
    public function edit_returns_an_ok_response(): void
    {
        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();
        $category = Category::factory()->create();

        $response = $this->actingAs($user)->get(route('staff.categories.edit', ['category' => $category]));

        $response->assertOk();
        $response->assertViewIs('Staff.category.edit');
        $response->assertViewHas('category');
    }

    #[Test]
    public function index_returns_an_ok_response(): void
    {
        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();

        $response = $this->actingAs($user)->get(route('staff.categories.index'));

        $response->assertOk();
        $response->assertViewIs('Staff.category.index');
        $response->assertViewHas('categories');
    }

    #[Test]
    public function store_returns_an_ok_response(): void
    {
        $this->seed(GroupsTableSeeder::class);

        $user = $this->createStaffUser();
        $category = Category::factory()->make();
        $meta = ['movie', 'tv', 'game', 'music', 'no'];

        $response = $this->actingAs($user)->post(route('staff.categories.store'), [
            'name'     => $category->name,
            'position' => $category->position,
            'image'    => $category->image,
            'icon'     => $category->icon,
            'meta'     => $meta[array_rand($meta)],
        ]);

        $response->assertRedirect(route('staff.categories.index'));
    }

    #[Test]
    public function update_returns_an_ok_response(): void
    {
        $this->seed(GroupsTableSeeder::class);

        $category = Category::factory()->create();
        $user = $this->createStaffUser();
        $meta = ['movie', 'tv', 'game', 'music', 'no'];

        $response = $this->actingAs($user)->patch(route('staff.categories.update', ['category' => $category]), [
            'name'     => $category->name,
            'position' => $category->position,
            'image'    => $category->image,
            'icon'     => $category->icon,
            'meta'     => $meta[array_rand($meta)],
        ]);

        $response->assertRedirect(route('staff.categories.index'));
    }
}
