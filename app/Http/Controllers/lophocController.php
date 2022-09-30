<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class lophocController extends Controller
{
    function them(){
        return view('admin.Home.ql_lop.them');
    }
    function sua(){
        return view('admin.Home.ql_lop.sua');
    }
    function ds(){
        return view('admin.Home.ql_lop.danhsach');
    }
}
?>
