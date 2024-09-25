<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all(): array
    {
        $posts[1]['slug'] = 'title-of-first-article';
        $posts[1]['title'] = 'Title Of First Article';
        $posts[1]['author'] = 'Habibullah';
        $posts[1]['date'] = '01 Januari 2024';
        $posts[1]['body'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam iusto iste mollitia, magni aspernatur nihil earum! Explicabo tempore provident in commodi repellendus nulla fugit doloremque harum ullam, magnam laborum animi dolore deleniti praesentium libero modi eligendi quo ratione perferendis illo dicta. Id eligendi animi, eius modi dolores tenetur sapiente itaque iusto delectus soluta sunt ducimus, voluptatibus nobis excepturi perspiciatis eum recusandae quae nostrum doloremque rem ullam iste accusamus? Fugit sit ipsum repudiandae cumque vel dolore doloribus reiciendis magni qui aliquid quam hic et est dignissimos sequi, nobis officiis, debitis amet voluptatum omnis deserunt rem animi quod? Obcaecati aliquid aut quas!';
        $posts[2]['id'] = '2';
        $posts[2]['slug'] = 'title-of-second-article';
        $posts[2]['title'] = 'Title Of Second Article';
        $posts[2]['author'] = 'Fahrurrozy';
        $posts[2]['date'] = '11 Januari 2024';
        $posts[2]['body'] = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, enim alias corrupti quidem vitae saepe omnis molestias. Similique perspiciatis rerum voluptatem sunt nemo quo accusamus. Nisi veritatis reiciendis unde a perspiciatis et tempora eos dignissimos! Earum tempora eveniet eum alias ratione reprehenderit assumenda excepturi modi ullam non illum, eligendi iure! Soluta esse temporibus dolorum, iste minima consequatur corrupti quisquam sequi modi provident doloribus nostrum sed illum quo possimus illo. Commodi dolores alias amet repudiandae. Deleniti dicta facilis quisquam! Excepturi praesentium officiis soluta recusandae delectus maiores perferendis pariatur ullam neque at perspiciatis asperiores veritatis vero, repellendus ab eligendi beatae rem non!';
        return $posts;
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}