<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => '投稿のタイトル',
        'body' => "本文です。ここに何かを入力して欲しいのであるけれども一体何を書いたらいいのであろうか。
        僕は悩んでしまうのであったが、まぁ、いいや。適当に何か書いておこうではないかとおもう
        /n一旦ここでスラッシュnを入れたいと思います。これでどうなるかは後のお楽しみに撮っておこうではないかと
        僕は考えているのであった。",
    ];
});
