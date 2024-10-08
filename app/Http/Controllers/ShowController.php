<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(string $slug, $id) {
        return [
            'slug' => $slug,
            'id' => $id,
        ];
    }
}
