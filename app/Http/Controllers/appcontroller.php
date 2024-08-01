<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appcontroller extends Controller
{
    public function index(){
        return view('index');
    }
    public function echotitle(){
        return view('PHPBasic.echotitle');
    }
    public function phpdate(){
        return view('PHPBasic.phpdate');
    }
    public function phpwhileloop(){
        return view('PHPBasic.phpwhileloop');
    }
    public function phpforloop(){
        return view('PHPBasic.phpforloop');
    }
    public function phpforeach(){
        return view('PHPBasic.phpforeach');
    }
    public function phparray(){
        return view('PHPBasic.phparray');
    }
    public function menubar(){
        return view('PHPBasic.menubar');
    }
    public function stringtoarray(){
        return view('PHPBasic.stringtoarray');
    }
    public function myaction(){
        return view('PHPBasic.myaction');
    }
    public function action(){
        return view('myaction.action');
    }
}
