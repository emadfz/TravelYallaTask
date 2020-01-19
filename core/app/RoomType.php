<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = "room_type";
    protected $fillable = ['room_type_name', 'details'] ;

    public function room()
    {
        return $this->hasMany('App\Room');
    }

}

