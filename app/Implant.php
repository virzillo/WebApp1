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

}
