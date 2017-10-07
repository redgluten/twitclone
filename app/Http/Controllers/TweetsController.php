<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Display an index of the resource
     * @return Response
     */
    public function index()
    {
        $tweets = Tweet::orderBy('created_at', 'desc')->paginate(10);

        return view('tweets.index', compact('tweets'));
    }

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
        $this->validate($request, ['content' => 'required|string|max:140']);

        $tweet = new Tweet;

        $tweet->content = $request->content;

        $tweet->save();

        return redirect('/');
    }
}
