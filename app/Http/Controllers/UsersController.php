<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display user profile.
     * @param  User   $user
     * @return Response
     */
    public function show(User $user)
    {
        $tweets = $user->tweets()->orderBy('created_at', 'desc')->get();

        return view('users.show', compact('user', 'tweets'));
    }
}
