<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'titolo', 'pubblicato', 'parent_id'
    ];

    // public function project(){
    //     return $this->belongsToMany(Project::class);
    // }


    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
