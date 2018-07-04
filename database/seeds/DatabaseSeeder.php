<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Models\Admin::class, 5)->create();
        factory(App\Models\Category::class, 10)->create();
        factory(App\Models\Brand::class, 5)->create();
        factory(App\Models\Product::class, 200)->create();
        factory(App\Models\Productphoto::class, 100)->create();
    }
}
