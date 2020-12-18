<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    function showUserName(){
        return 'Ameena Shaheen';
    }

    /*function indexPage(){
        return view('welcome')-> with(['name' => 'Ameena Shaheen','id'=>22]);
    }*/

    function showdatawithArrayAtribute(){
        $data=[];
        $data['userName']='hala';
        $data['age']=28;
        return view('welcome',$data);
    }
    function showwithObject(){
        $obj = new \stdClass();
        $obj->name = 'momen';
        $obj->id = 1;
        $obj->gender = 'male';
        return view('welcome',compact('obj'));
    }
    function conditionStmt(){
        return view('test')->with('name' , 'ameena');
    }
    function conditionStmt2(){
        $data = ['hala','helen'];
        return view('test',compact('data'));
    }
}
