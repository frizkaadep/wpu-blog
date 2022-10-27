<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Frizka Ade',
        //     'email' => 'frizkaade@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'adjat Sudrajat',
        //     'email' => 'adjatsu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'luky Trio Handoko',
        //     'email' => 'luky@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odio harum soluta excepturi! Nam illum odit ipsum pariatur nobis. Rerum, ullam necessitatibus,</p><p>id earum placeat harum labore saepe tempora rem omnis libero quisquam dolore nostrum quis. Nulla nisi tenetur ipsam sunt enim, et odio soluta quos possimus, voluptate, a similique?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odio harum soluta excepturi! Nam illum odit ipsum pariatur nobis. Rerum, ullam necessitatibus,</p><p>id earum placeat harum labore saepe tempora rem omnis libero quisquam dolore nostrum quis. Nulla nisi tenetur ipsam sunt enim, et odio soluta quos possimus, voluptate, a similique?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odio harum soluta excepturi! Nam illum odit ipsum pariatur nobis. Rerum, ullam necessitatibus,</p><p>id earum placeat harum labore saepe tempora rem omnis libero quisquam dolore nostrum quis. Nulla nisi tenetur ipsam sunt enim, et odio soluta quos possimus, voluptate, a similique?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident odio harum soluta excepturi! Nam illum odit ipsum pariatur nobis. Rerum, ullam necessitatibus,</p><p>id earum placeat harum labore saepe tempora rem omnis libero quisquam dolore nostrum quis. Nulla nisi tenetur ipsam sunt enim, et odio soluta quos possimus, voluptate, a similique?</p>',
        //     'category_id' => 2,
        //     'user_id' => 3
        // ]);
    }
}
