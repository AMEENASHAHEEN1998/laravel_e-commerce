<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// create with command php artisan make:controller FirstController
class FirstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showFirstControllerWithoutMiddelware');
    }
    public function showFirstController(){
        return 'this message from first controller in front folder';
    }
    public function showFirstControllerWithoutMiddelware(){
        return 'this message from first controller in front folder without middelware auth';
    }
    public function showFirstControllerMessage(){
        return 'this message from first controller in front folder use to cheeck middelware';
    }
}
