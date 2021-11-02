<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        $user =User::factory()->create();
        $personal = Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);
        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title'=>'My Personal Post',
            'slug'=>'my-personal-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, magnam.',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut eos delectus perferendis amet, laborum nisi recusandae id labore repellendus.',
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title'=>'My family Post',
            'slug'=>'my-family-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, magnam.',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut eos delectus perferendis amet, laborum nisi recusandae id labore repellendus.',
        ]);
        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$work->id,
            'title'=>'My Work Post',
            'slug'=>'my-work-post',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, magnam.',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis aut eos delectus perferendis amet, laborum nisi recusandae id labore repellendus.',
        ]);
    }
}
