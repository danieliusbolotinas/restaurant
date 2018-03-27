<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table ='reservations';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'phone',
        'reservation_start',
        'time',
        'seats',
    ];


}
