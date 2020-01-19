<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = "room";
    protected $fillable = ['room_name', 'hotel_id', 'room_type_id', 'image'] ;

    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

}
