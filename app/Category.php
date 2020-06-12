<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'titolo', 'pubblicato',
    ];

    public function project(){
        return $this->belongsToMany(Project::class);
    }
}
