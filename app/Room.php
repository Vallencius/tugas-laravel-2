<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function type(){
        return $this->belongsTo('App\RoomType', 'room_type', 'id');
    }
}
