<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'body' => "ここにコメントが入りますのでよろしくお願いします。
        本当にここにコメントなどとというものを入れてしまっていいのであろうか。
        \nバックスラッシュなどと小賢しいことを僕は全くしたくはないのであるが、
        これが世の中っちゅう奴なのかもしれないですもね。",
    ];
});
