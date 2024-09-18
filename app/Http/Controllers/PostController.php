<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function hello(){
        return view('hello');
    }

    public function toblog() {
        $title = "Welcome on my blog";
        $description = "<h3>Voici une description de mon blog !</h3>";
        $posts = [
            [
                'id' => 1,
                'title' => 'new post 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/300x150',
            ],
            [
                'id' => 2,
                'title' => 'new post 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/300x150',
            ],
            [
                'id' => 3,
                'title' => 'new post 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/300x150',
            ],
            [
                'id' => 4,
                'title' => 'new post 4',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/300x150',
            ],
        ];
        return view('blog', [
            'title'         => $title,
            'description'   => $description,
            'posts'         => $posts
        ]);
    }

};
