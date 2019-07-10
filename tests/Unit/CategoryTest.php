<?php

namespace Tests\Unit;

use App\Category;
use Faker\Factory;
use Illuminate\Support\Str;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function test_can_create_category()
    {
        $faker = Factory::create();
        $data = [
            'name' => $faker->word,
            'slug' => Str::slug($faker->word),
            'description' => $faker->paragraph,
        ];
        $this->post(route('category.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_category()
    {
        $faker = Factory::create();
        $category = factory(Category::class)->create();
        $data = [
            'name' => $faker->word,
            'slug' => Str::slug($faker->word),
            'description' => $faker->paragraph,
        ];
        $this->put(route('category.update', $category->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_can_show_category()
    {
        $category = factory(Category::class)->create();
        $this->get(route('category.show', $category->id))
            ->assertStatus(200);
    }

    public function test_can_delete_category()
    {
        $category = factory(Category::class)->create();
        $this->delete(route('category.destroy', $category->id))
            ->assertStatus(204);
    }
}
