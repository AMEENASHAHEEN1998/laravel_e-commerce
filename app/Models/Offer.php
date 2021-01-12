<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';
    protected $fillable = ['Name','Price' , 'Photo','Created_at', 'Updated_at'];
    protected $hidden =['Created_at', 'Updated_at'];
}
