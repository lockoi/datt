<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class hockyController extends Controller
{
    function them(){
        return view('admin.Home.ql_hk.them');
    }
    function sua(){
        return view('admin.Home.ql_hk.sua');
    }
    function ds(){
        return view('admin.Home.ql_hk.danhsach');
    }
}
?>
