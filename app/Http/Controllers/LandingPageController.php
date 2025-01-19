<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import models
use App\Models\Post;
use App\Models\Category;

class LandingPageController extends Controller
{
    //home page
    public function homepage(){
        $posts = Post::where('is_featured',true)->orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::take(8)->get();
        $slider_post=Post::where('slider_post',true)->orderBy('created_at', 'desc')->take(1)->get();


        return view('home',[
                'posts' => $posts, 
                'categories' => $categories, 
                'slider_post' => $slider_post
            ]); 
    }

    //single post
    public function singlepost($postId){
        $categories = Category::take(8)->get();
        $post=Post::where('id',$postId)->get()->first();

        return view('single-post',[
            'categories' => $categories,
            'post'=>$post,
        ]);
    }

    //single category
    public function singlecategory($categoryId){
        $categories = Category::take(8)->get();
        $our_category=Category::findOrFail($categoryId);
        $posts=Post::where('category_id',$categoryId)->get();

        return view('single-category',[
            'categories' => $categories,
            'our_category'=>$our_category,
            'posts'=>$posts,
        ]);
    }

}
