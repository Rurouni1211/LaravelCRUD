<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function a(){
        return 'Hello / Route';
    }
    public function testing(){
        return view('hello');
    }
    public function service(){
        $students=array(
            array('name'=>'gg', 'age'=>20),
            array('name'=>'zz','age'=>21)
        );
        return view('service', ['a'=>$students]);
    }
}
