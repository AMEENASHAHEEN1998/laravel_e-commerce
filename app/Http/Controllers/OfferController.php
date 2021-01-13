<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function __construct()
    {
        
    }
    public function getOffer(){
        return Offer::get();
       // return Offer::select('ID','Name')->get();
    }

    public function store(){
        Offer::create([
            'Name'=> 'Offer 4',
            'Price'=>400,
            'Detials'=>'this is offer 4',
        ]);
    }
}
