<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PHP_initial extends Controller
{

    public function getJson(){
        return response() -> json([
            'greeting' => 'Welcome  to the  PHP Back-End',
            'team' => 'of Team 258']);
    }
}
