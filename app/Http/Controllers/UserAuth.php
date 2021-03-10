<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{

    //My customized function for login
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user',$data['user']);
        return redirect('profile');
    }
}
