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

    /**
     * Store the newly created resource in DB.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        dd($request);
    }
}
