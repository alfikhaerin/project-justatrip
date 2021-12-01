<?php

namespace App\Models;


class Post
{
    private static  $blog_posts = [
        [
            "title" => "Judul pertama",
            "slug" => "judul-post-pertama",
            "author" => "Samuel Gan",
            "body"   => "Flores is a beautiful big island it has amazing attractions that never end. Flores always presents its natural beauty with a warm welcome by local people with ritual ceremonies. The traditional culture and hospitality will make a special impression on you and will provide deep memories to stay connected even when you return home. <br>There are many tourist attractions that we can visit in Flores. Like Lake Kelimutu, which presents the beauty of nature and historical myths that develop in the community. This lake is unique in its color, the color of the lake water can change over time. This lake is called the Three-Colored Lake because it has three colors.  "

        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Samuel Gan",
            "body"   => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam in, ullam et dicta dignissimos neque dolorum repudiandae vitae saepe. Modi odit pariatur sit eveniet possimus sed vero obcaecati, et, recusandae reprehenderit asperiores quas voluptates quam sequi quo nobis tempora distinctio quos, alias optio. Reiciendis quae accusantium reprehenderit? Est nisi ab, sit amet totam sunt quae dolore voluptate. Suscipit quidem excepturi cumque cum quod quia recusandae quae eius enim minima, sequi voluptatibus, esse necessitatibus doloribus voluptatum amet voluptates maiores, fuga reiciendis ipsam facilis natus. Quos labore, iste voluptates quae excepturi dolorum eos pariatur molestias, numquam sapiente ratione modi harum sed nisi!
            "
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
