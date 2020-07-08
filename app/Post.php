<?php

namespace App;

use App\User;
use App\PostCategory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postView()
    {
        return $this->hasMany(PostView::class);
    }

    public function showPost()
    {
    if(auth()->id()==null){
        return $this->postView()
        ->where('ip', '=',  request()->ip())->exists();
    }

    return $this->postView()
    ->where(function($postViewsQuery) { $postViewsQuery
        ->where('session_id', '=', request()->getSession()->getId())
        ->orWhere('user_id', '=', (auth()->check()));})->exists();
    }

}
