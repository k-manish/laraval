<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\AddedUserModel;
use App\MyProfModel;
use Session;
class Main extends Controller
{
    public function index()
    {
        if(!(Session::has('user'))){
               return redirect('');
        }
        return view("pages.Main");
    }
    public function addUser()
    {
        return view("pages.AddUser");
    }
    public function addedUserDetail()
    {
        $c=new AddedUserModel();
        $records = $c->getRecord();
        
        //return view('pages.AddedUser',compact('records'));
    }
    public function userinfo()
    {
        if(!(Session::has('user'))){
            return redirect('');
        }
        $mail=Session::get('user');
        $c=new MyProfModel();
        $result=$c->getDetail($mail);
        return view('pages.UserProfile')->with('record',$result);
    }
}
