<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function son(){
        return $this->hasMany(Son::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }
}
