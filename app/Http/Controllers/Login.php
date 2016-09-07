<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\LoginModel;
use Session;
class Login extends Controller
{
    protected $userid;
    protected $pswd;
    
    public  function __construct()
    {
        $this->userid="";
        $this->pswd="";
    }
    public function setdata()
    {
        $this->userid=$_REQUEST["userid"];
        $this->pswd=$_REQUEST["pswd"];
    }
    
    public function index()
    {
        $this->setdata();
        $c=new LoginModel();
        $result=$c->getRecord($this->userid,$this->pswd);
        if($result){
            Session::put('user',$this->userid);
            return redirect('MainPage');
        }
        return redirect('');
    }
}
