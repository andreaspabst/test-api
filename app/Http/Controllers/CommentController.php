<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentCollection;
use App\Http\Resources\Comment as ResourcesComment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Post $post, User $user)
    {
        if ($post && $post->exists) {
            return response()->json( new CommentCollection($post->comments) , 200, [], JSON_PRETTY_PRINT);
        } else if ($user && $user->exists) {
            return response()->json( new CommentCollection($user->comments) , 200, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json( new CommentCollection(Comment::all()) , 200, [], JSON_PRETTY_PRINT);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new ResourcesComment( new Comment($request->all) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return new ResourcesComment( $comment );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        return new ResourcesComment( new Comment($request->all) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        return $this->destroyRequest($comment);
    }
}
