<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    protected $table = 'responsibilities';

    protected $fillable = [
      'name',  
    ];

    public function user(){
      return $this->hasMany(User::class);
    }
}
