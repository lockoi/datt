<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class monhocController extends Controller
{
    function them(){
        return view('admin.Home.ql_mon.them');
    }
    function sua(){
        return view('admin.Home.ql_mon.sua');
    }
    function ds(){
        return view('admin.Home.ql_mon.danhsach');
    }
}
?>
