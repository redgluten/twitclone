<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Display the create form
     * @return Response
     */
    public function create()
    {
        return view('tweets.create');
    }
}
