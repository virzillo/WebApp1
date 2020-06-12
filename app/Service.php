<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'titolo', 'pubblicato','icona','descrizione'
    ];
}
