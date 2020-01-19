<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hotel";
    protected $fillable = ['name', 'address', 'city', 'state', 'country', 'zip_code', 'email', 'phone', 'image'] ;

    public function room()
    {
        return $this->hasMany('App\Room');
    }
}

