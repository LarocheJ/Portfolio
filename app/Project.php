<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $casts = [
        'stack' => 'array'
    ];

    protected $table = 'projects';

    protected $fillable = ['title'];

    protected $guarded = [];

}
