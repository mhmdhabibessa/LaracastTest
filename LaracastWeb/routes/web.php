<?php
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts',['posts'  => Post::latest()->get()]);
});

Route::get('post/{post}',function(Post $post){

  return view('post', ['post'  => $post ]);
});

Route::get('categories/{category:name}',function(Category $category){

    return view('posts', ['posts'  => $category ->posts]);
  });

  Route::get('authors/{author:username}',function(User $author){

    return view('posts', ['posts'  => $author ->posts ] );
  });