<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
class Logout extends Controller
{
    public function index()
    {
        Session::flush();
        return redirect('');
    }
}
