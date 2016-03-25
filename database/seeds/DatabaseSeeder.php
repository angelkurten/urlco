<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        /*
         * $users = factory(App\User::class, 3)
           ->create()
           ->each(function($u) {
                $u->posts()->save(factory(App\Post::class)->make());
            });
        */

        //$users = factory(\App\Entities\User::class, 49)->create();
        //$categories = factory(\App\Entities\Category::class, 10)->create();
        //$folders = factory(\App\Entities\Folder::class, 150)->create();

        $urls = factory(\App\Entities\Url::class, 400)->create()->each(function($u){
            $u->categories()->sync(\App\Entities\Category::all()->random(3));
            $u->folders()->sync(\App\Entities\Category::all()->random(2));
        });
    }
}
