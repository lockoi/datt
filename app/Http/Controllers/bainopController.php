<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class bainopController extends Controller
{
    function them(){
        return view('admin.Home.ql_bainop.them');
    }
    function sua(){
        return view('admin.Home.ql_bainop.sua');
    }
    function ds(){
        return view('admin.Home.ql_bainop.danhsach');
    }
}
?>
