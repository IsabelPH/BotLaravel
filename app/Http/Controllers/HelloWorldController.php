<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function get()
    {
        return 'Hello World from dailycord :3';
    }
}
