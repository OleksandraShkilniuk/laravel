<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $test = User::query()->find(1);
        if($test)
        {
            dump('Success');
        }else{
            dump('No registry');
        }
    }
}
