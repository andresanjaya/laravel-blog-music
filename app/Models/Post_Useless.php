<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama",
            "author" => "Andre Sanjaya",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur nobis illum tenetur incidunt. Ipsam repellendus dolor aperiam molestiae minus, fuga ipsa ducimus voluptatum nisi corporis veniam ullam maiores, illo deserunt molestias dolorum? Et voluptatem nesciunt itaque sunt dolores, non culpa, id fugit, quisquam ad rem. Officiis ratione qui, sit magnam rerum necessitatibus debitis nihil iusto error adipisci sequi ea. Velit, iure inventore? Repudiandae accusantium unde tenetur pariatur incidunt eos voluptates quaerat enim similique, temporibus quasi tempore, qui atque quae perferendis?"
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Myoui Mina",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate earum laboriosam incidunt dolorem quo possimus iste alias, natus minima neque esse cum maiores ad ipsum? Id eveniet, debitis consequuntur cum nulla totam quod porro quia voluptatem magnam provident omnis, dolorem quidem quo voluptatibus dolores eius exercitationem ipsum earum blanditiis vitae! Quisquam dolore aperiam aliquam iste illum atque impedit, itaque ipsam dignissimos explicabo. Exercitationem hic ab quia temporibus repellendus aperiam vitae est natus ad obcaecati officiis saepe beatae, voluptate quod illo iusto voluptatem, cupiditate, magni veniam voluptatum? Nobis officiis nihil rerum enim officia tempore, doloribus, unde debitis suscipit in recusandae deserunt."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug", $slug);
    }
}
