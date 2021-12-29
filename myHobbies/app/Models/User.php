<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hobby;

class User extends Model
{

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password'];

    public function hobbies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(' App\Models\Hobby');
    }

}
