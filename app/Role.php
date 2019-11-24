<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'First_name', 'Last_name', 'slug',
    ];
    public function users(){
        return $this->hasMany('App\User');
    }
}
