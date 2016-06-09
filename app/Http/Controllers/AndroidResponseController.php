<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AndroidResponseController extends Controller
{
    /**
     * Responds to requests to GET /users/show/1
     */
    public function getLogin(checkoutRequest $data)
    {

//        $data = json_encode([['login' => $login],['password' => $password]]);

        echo $data;
        
        DB::table('snapper')->insert([
            'request' => 'hello',
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
