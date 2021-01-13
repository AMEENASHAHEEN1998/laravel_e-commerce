<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['Name','Price' , 'Detials','Created_at', 'Updated_at'];
    protected $hidden =['Created_at', 'Updated_at'];
    public $timestamps = false;
}
