<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "booking";
    protected $fillable = ['room_id', 'start_date', 'end_date', 'custome_full_name', 'phone', 'total_nights', 'total_price' , 'user_id'] ;


    public function hotel()
    {
        return $this->belongsTo('App\User');
    }

}
