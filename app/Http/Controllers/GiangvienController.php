<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class GiangVienController extends Controller
{
   function index(){
         return view('Giangvien.home.index');
    }
    function hk(){
        return view('Giangvien.ql_hk.hk');
   }
    function lophoc(){
        return view('Giangvien.ql_lophoc.lophoc');
   }
    function monhoc(){
        return view('Giangvien.ql_monhoc.monhoc');
   }
    function download(){
        return view('Giangvien.download.index');
   }
}
?>
