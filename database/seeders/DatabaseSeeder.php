<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::factory(30)->create();
        Comment::factory(30)->create();

        // $user=User::create([
        //     'name'=>'sandeep',
        //     'email'=>'sandeep@gmail.com',
        //     'password'=>bcrypt('sandeep')
        // ]);

        // $category=Category::create([
        //      'name'=>'Motivational',
        //      'slug'=>'Motivational'
        // ]);

        // $category=Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'Personal'
        // ]);

        // Post::create([

        //     'title' => 'My First Post',
        //     'excerpt' => 'this is the main content of the file',
        //     'body' => 'This is the main content of the post',
        //     'slug' => 'my-first-post',
        //     'published_at' => now(),
        //     'category_id' => $category->id,
        //     'user_id'=>$user->id
        // ]);
    }
}
