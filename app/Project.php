<?php

namespace App;

use App\Service;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    // protected $fillable = ['user_id', 'category_id', 'title', 'slug', 'description'];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function service()
    {
        return $this->belongsToMany(Service::class);
    }
}
