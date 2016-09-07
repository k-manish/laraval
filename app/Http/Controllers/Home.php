<?php
/**
* File Name :Home.php
* File Path :Controller/Home.php
* Author :Manish Kumar
* Date of creation :02/09/2016
* Comments if any : this is home page where user is redirected if user-id and password is correct.
*
*/
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests;
use App\UserReg;
//use FileMaker;

class Home extends Controller
{
    /**
     *@param void
     *@return view pages.Registration
     */
    public function index()
    {
        return view('pages.Registration');
    }
    
    /**
     *@param objectofRegistration  $request
     *@return view pages.Home
     */
    public function store(RegistrationRequest $request)
    {
        $name=$_GET["name"];
        $mail=$_GET["mail"];
        $contact=$_GET["mobile"];
        $pswd=$_GET["pswd"];
        
        echo $name." ".$mail;
       $c=new UserReg();
       $c->addUser($name,$mail,$contact,$pswd);
       $c->find();
    }
    
    public function test()
    {
        $name="name";
        $mail="mail";
        $contact="mobile";
        $pswd="pswd";
        $fm = new \FileMaker(dbname,ipaddr,username,password);
        $cmd = $fm->newAddCommand('user_add_self');
        $cmd->setFiled('name',$name);
        $cmd->setFiled('mail_id',$mail);
        $cmd->setFiled('mobile',$contact);
        $cmd->setFiled('password',$pswd);
        $cmd->setFiled('parentId_fk',null);
        $result = $cmd->execute();
        if(FileMaker::isError($result)){ 
            die('Error - ' . $fm->getCode() . ' ' . $fm->getMessage());
        }
        else
            echo 'registration done';
    }
    
    
    public function filem()
    {
        return view('pages.mytest');
    }

}
