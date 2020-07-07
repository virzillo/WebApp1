<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostCategory;
use Illuminate\Http\Request;

class SitoBlogController extends Controller
{
    public function index(){

        $posts=Post::where('pubblicato','on')->paginate(1);
        $postcategories=PostCategory::all()->where('pubblicato','on');
        $page_title = 'Blog';
        $page_description = '';
        return view('website.blog.index',compact('posts','postcategories','page_title','page_description'));
    }
    public function show(Post $post)
    {
        $page_title = 'Articolo';
        $page_description = '';
        $post=Post::find($post->id)->where('pubblicato','on');
        $postcategories=PostCategory::all()->where('pubblicato','on');
        return view('website.blog.show',compact('post','postcategories','page_title','page_description'));
    }

    public function category(PostCategory $postcategory)
    {
        $page_title = 'Articolo';
        $page_description = 'Some description for the page';
        $catid=PostCategory::where('titolo',$postcategory->titolo)->first();
        //  dd($catid->id);

        $posts=Post::where('category_id',$catid->id)->where('pubblicato','on')->paginate(1);
        $postcategories = PostCategory::all()->where('pubblicato','on');
        // dd($post);
        return view('website.blog.categoryindex',compact('posts','postcategories','page_title','page_description'));
    }

}
