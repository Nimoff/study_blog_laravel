<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Tag;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke(){
        $posts = auth()->user()->likedPost;
        $user = User::find(4);
        dd($user->likedPost);
        return view('personal.liked.index', compact('posts'));
    }
}
