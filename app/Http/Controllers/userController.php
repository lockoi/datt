<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class userController extends Controller
{
    function them(){
        return view('admin.Home.ql_user.them');
    }
    function sua(){
        return view('admin.Home.ql_user.sua');
    }
    function ds(){
        return view('admin.Home.ql_user.danhsach');
    }
    function thongtin(){
        return view('Keys.thongtin');
    }
    function capnhat(){
        return view('Keys.capnhat');
    }
    function dangxuat(){
        return view('Keys.dangnhap');
    }
    function dangky(){
        return view('Keys.dangky');
    }
    function dangnhap(){
        return view('Keys.dangnhap');
    }
    function quenmk(){
        return view('Keys.quenmk');
    }
}
?>
