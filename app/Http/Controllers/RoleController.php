<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class RoleController extends Controller
{
    public function route_1(){
         return "berhasil masuk route 1";
    }

    public function route_2(){
        return "berhasil masuk route 2";
    }

    public function route_3(){
        return "berhasil masuk route 3";
    }
}
