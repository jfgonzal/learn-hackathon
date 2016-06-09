<?php

use Illuminate\Support\Facades\Auth;

function userLoggedIn()
{
    $logged_in = false;
    if (Auth::check()) {
        $logged_in = true;
    }

    return $logged_in;
}
