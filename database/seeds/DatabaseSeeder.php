<?php

use App\Model\Category;
use App\Model\Likes;
use App\Model\Question;
use App\Model\Reply;
use App\User;
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
        // $this->call(UserSeeder::class);
        factory(User::class,100)->create();
        factory(Category::class,6)->create();
        factory(Question::class,2000)->create();
        factory(Reply::class,10000)->create()->each(function ($reply) {
            return $reply->like()->save(factory(Likes::class)->make());
        });

    }
}
