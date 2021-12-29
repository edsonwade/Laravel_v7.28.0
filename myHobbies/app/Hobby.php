<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    //
    protected $table = 'hobbies';
    protected $fillable = ['name', 'description','user_id'];




    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

}
