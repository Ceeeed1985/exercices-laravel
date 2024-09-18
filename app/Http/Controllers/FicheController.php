<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FicheController extends Controller
{
    public function getFiches()
    {
        $title = "Fiches de présentation des membres";
        $description = "<h3>Voici une petite description de l'équipe. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit tenetur temporibus praesentium labore aspernatur quaerat qui nam dolorem maiores, deleniti nostrum, eos fugit a saepe aliquid quae pariatur iste enim hic suscipit? Ipsum maiores neque fugiat ipsam assumenda architecto vitae est dolores nisi tempora, voluptate necessitatibus, modi delectus mollitia autem?</h3>";
        $fiches = [
            [
                'id' => 1,
                'type' => 'male',
                'firstname' => 'Cédric',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/200x110',
            ],
            [
                'id' => 2,
                'type' => 'female',
                'firstname' => 'Magali',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/200x110',
            ],
            [
                'id' => 3,
                'type' => 'male',
                'firstname' => 'Robin',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/200x110',
            ],
            [
                'id' => 4,
                'type' => 'female',
                'firstname' => 'Alice',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam temporibus, error assumenda est, sed ratione aliquam sit quae, ullam quaerat vel corporis expedita. Accusantium, optio!',
                'imageUrl' => 'http://placehold.it/200x110',
            ],
        ];
        return view('fiches', [
            'title'         => $title,
            'description'   => $description,
            'fiches'         => $fiches
        ]); 
    }
}

