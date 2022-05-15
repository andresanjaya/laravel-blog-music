<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Andre Sanjaya',
            'username' => 'andresanjaya',
            'email' => 'andresanjaya2506@gmail.com',
            'password' => bcrypt('erdna2506')
        ]);
        User::factory(3)->create(['password' => bcrypt('blogandrepassword')]);

        Category::create([
            'name' => 'Pop',
            'slug' => 'pop'
        ]);
        Category::create([
            'name' => 'Jazz',
            'slug' => 'jazz'
        ]);
        Category::create([
            'name' => 'Hip Hop',
            'slug' => 'hip-hop'
        ]);
        Category::create([
            'name' => 'Rock',
            'slug' => 'rock'
        ]);
        Category::create([
            'name' => 'Indie',
            'slug' => 'indie'
        ]);
        Category::create([
            'name' => 'Metal',
            'slug' => 'metal'
        ]);
        Category::create([
            'name' => 'Punk',
            'slug' => 'punk'
        ]);

        // Post::factory(20)->create();



        // User::create([
        //     'name' => 'Myoui Mina',
        //     'email' => 'myouimina@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit sequi veritatis molestias corporis illum commodi error voluptas magni, accusamus praesentium laboriosam amet. Sapiente eos sequi deleniti eveniet nulla omnis, molestiae numquam inventore impedit eius distinctio corporis asperiores veritatis, dolor placeat, illo assumenda mollitia alias tenetur ab dignissimos soluta. Nemo rem molestiae accusantium, aliquam at recusandae consequatur provident iure quos laudantium sunt ipsam quam possimus iusto quaerat ipsa. Officiis ipsum nisi optio dolor explicabo similique dolorum saepe blanditiis quas, impedit illo error nobis non veritatis libero a? Nostrum dolores nam debitis deserunt dolore, est reprehenderit explicabo ipsam voluptatem quasi laudantium impedit!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit sequi veritatis molestias corporis illum commodi error voluptas magni, accusamus praesentium laboriosam amet. Sapiente eos sequi deleniti eveniet nulla omnis, molestiae numquam inventore impedit eius distinctio corporis asperiores veritatis, dolor placeat, illo assumenda mollitia alias tenetur ab dignissimos soluta. Nemo rem molestiae accusantium, aliquam at recusandae consequatur provident iure quos laudantium sunt ipsam quam possimus iusto quaerat ipsa. Officiis ipsum nisi optio dolor explicabo similique dolorum saepe blanditiis quas, impedit illo error nobis non veritatis libero a? Nostrum dolores nam debitis deserunt dolore, est reprehenderit explicabo ipsam voluptatem quasi laudantium impedit!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit sequi veritatis molestias corporis illum commodi error voluptas magni, accusamus praesentium laboriosam amet. Sapiente eos sequi deleniti eveniet nulla omnis, molestiae numquam inventore impedit eius distinctio corporis asperiores veritatis, dolor placeat, illo assumenda mollitia alias tenetur ab dignissimos soluta. Nemo rem molestiae accusantium, aliquam at recusandae consequatur provident iure quos laudantium sunt ipsam quam possimus iusto quaerat ipsa. Officiis ipsum nisi optio dolor explicabo similique dolorum saepe blanditiis quas, impedit illo error nobis non veritatis libero a? Nostrum dolores nam debitis deserunt dolore, est reprehenderit explicabo ipsam voluptatem quasi laudantium impedit!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit sequi veritatis molestias corporis illum commodi error voluptas magni, accusamus praesentium laboriosam amet. Sapiente eos sequi deleniti eveniet nulla omnis, molestiae numquam inventore impedit eius distinctio corporis asperiores veritatis, dolor placeat, illo assumenda mollitia alias tenetur ab dignissimos soluta. Nemo rem molestiae accusantium, aliquam at recusandae consequatur provident iure quos laudantium sunt ipsam quam possimus iusto quaerat ipsa. Officiis ipsum nisi optio dolor explicabo similique dolorum saepe blanditiis quas, impedit illo error nobis non veritatis libero a? Nostrum dolores nam debitis deserunt dolore, est reprehenderit explicabo ipsam voluptatem quasi laudantium impedit!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
