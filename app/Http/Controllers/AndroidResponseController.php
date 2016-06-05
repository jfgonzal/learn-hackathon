<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AndroidResponseController extends Controller
{
    /**
     * Responds to requests to GET /users/show/1
     */
    public function getLogin($login, $password)
    {

        $data = json_encode([['login' => $login],['password' => $password]]);

        DB::table('snapper')->insert([
            'request' => $data,
            'type' => 'login-attempt'
        ]);
        
        echo "true";

    }

    /**
     * Responds to requests to GET /users
     */
    public function getResponseUpdate()
    {
        //
    }

    /**
     * Responds to requests to GET /users/admin-profile
     */
    public function sendResponseUpdate()
    {
        //
    }

    /**
     * Responds to requests to POST /users/profile
     */
    public function postProfile()
    {
        //
    }





}
