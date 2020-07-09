<?php

namespace App;

use App\Service;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Implant extends Model
{
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function service()
    {
        return $this->belongsToMany(Service::class);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function showImplant()
    {
        if(auth()->id()==null){
            return $this->implantView()
            ->where('ip', '=',  request()->ip())->exists();
        }

        return $this->implantView()
        ->where(function($implantViewsQuery) { $implantViewsQuery
            ->where('session_id', '=', request()->getSession()->getId())
            ->orWhere('user_id', '=', (auth()->check()));})->exists();
    }
}
