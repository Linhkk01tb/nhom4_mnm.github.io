<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class SanphamController extends Controller
{
    //
    public function themsanpham(){
        $danhmuc = DB::table('danhmuc')->orderBy('id_danhmuc','desc')->get();

        return view('admin.themsanpham')->with('danhmuc',$danhmuc);
    }
    public function lietkesanpham(){
        $lietke = DB::table('danhmuc')->get();
        $quanlysanpham = view('admin.lietkedanhmuc')->with('lietkedanhmuc',$lietke);
        return view('admin_layout')->with('admin.lietkedanhmuc',$quanlysanpham);
    }
    public function luusanpham(Request $request){
       $data = array();
       $data['tendanhmuc'] = $request->tendanhmuc; 
       $data['mota'] = $request->mota; 
       $data['trangthai'] = $request->trangthai;
       DB::table('danhmuc')->insert($data); 
       Session::put('message_them','Thêm danh mục thành công!');
       return Redirect::to('/admincp/danhmucsanpham/them');
    }

    public function suasanpham($id_sanpham){
        $suadanhmuc = DB::table('danhmuc')->where('id_danhmuc',$id_sanpham)->get();
        $quanlydanhmuc = view('admin.suadanhmuc')->with('suadanhmuc',$suadanhmuc);
        return view('admin_layout')->with('admin.suadanhmuc',$quanlydanhmuc);
    }
    public function capnhatsanpham(Request $request, $id_sanpham){
        $data = array();
        $data['tendanhmuc'] = $request->tendanhmuc; 
        $data['mota'] = $request->mota; 
        $data['trangthai'] = $request->trangthai;
        DB::table('danhmuc')->where('id_danhmuc',$id_sanpham)->update($data); 
        Session::put('message_them','Sửa danh mục thành công!');
        return Redirect::to('/admincp/danhmucsanpham/lietke');
     }
     public function xoadanhmuc($id_sanpham){
        DB::table('danhmuc')->where('id_danhmuc',$id_sanpham)->delete(); 
        return Redirect::to('/admincp/danhmucsanpham/lietke');
    }
}
