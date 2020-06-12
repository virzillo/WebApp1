<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'titolo', 'pubblicato','icona','descrizione'
    ];

    public function project(){
        return $this->belongsToMany(Project::class);
    }


}
