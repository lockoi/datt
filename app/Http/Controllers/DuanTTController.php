<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DuanTTController extends Controller
{
   function index(){
         return view('Layout.home.index');
    }
    function admin(){
        return view('admin.Home.ql_hk.them');
    }
    function hocky(){
        return view('Layout.ql_hk.hocky');
   }
    function lophoc(){
        return view('Layout.ql_lophoc.lophoc');
   }
    function monhoc(){
        return view('Layout.ql_mh.monhoc');
   }
    function nopbai(){
        return view('Layout.ql_nopbai.nopbai');
   }
    function taifile(){
        return view('Layout.ql_nopbai.taifile');
   }
    function error(){
        return view('error.error');
   }
}
?>
