<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name', 'style'];

    public function hobbies()
    {
        return $this->belongsToMany('Hobby');
    }
}
