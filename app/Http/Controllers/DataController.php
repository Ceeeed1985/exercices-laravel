<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showData(){
        return [
            'name' => 'Laravel' ,
            'age' => 56 ,

        ];
    }
}
