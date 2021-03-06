<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(Comment::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Comment::create(array(
            'author' => Input::get('author'),
            'text' => Input::get('text')
        ));

        return response()->json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);

        return response()->json(array('success' => true));
    }

}
