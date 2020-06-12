<?php

namespace App;

use App\Service;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function category()
    {
        return $this->hasMany(Category::class);
    }
    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
