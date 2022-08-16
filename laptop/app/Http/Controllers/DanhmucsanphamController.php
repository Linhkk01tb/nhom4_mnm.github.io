<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class DanhmucsanphamController extends Controller
{
    //
    public function themdanhmuc(){
        return view('admin.themdanhmuc');
    }
    public function lietkedanhmuc(){
        $lietke = DB::table('danhmuc')->get();
        $quanlydanhmuc = view('admin.lietkedanhmuc')->with('lietkedanhmuc',$lietke);
        return view('admin_layout')->with('admin.lietkedanhmuc',$quanlydanhmuc);
    }
    public function luudanhmuc(Request $request){
       $data = array();
       $data['tendanhmuc'] = $request->tendanhmuc; 
       $data['mota'] = $request->mota; 
       $data['trangthai'] = $request->trangthai;
       DB::table('danhmuc')->insert($data); 
       Session::put('message_them','Thêm danh mục thành công!');
       return Redirect::to('/admincp/danhmucsanpham/them');
    }

    public function suadanhmuc($id_danhmuc){
        $suadanhmuc = DB::table('danhmuc')->where('id_danhmuc',$id_danhmuc)->get();
        $quanlydanhmuc = view('admin.suadanhmuc')->with('suadanhmuc',$suadanhmuc);
        return view('admin_layout')->with('admin.suadanhmuc',$quanlydanhmuc);
    }
    public function capnhatdanhmuc(Request $request, $id_danhmuc){
        $data = array();
        $data['tendanhmuc'] = $request->tendanhmuc; 
        $data['mota'] = $request->mota; 
        $data['trangthai'] = $request->trangthai;
        DB::table('danhmuc')->where('id_danhmuc',$id_danhmuc)->update($data); 
        Session::put('message_them','Sửa danh mục thành công!');
        return Redirect::to('/admincp/danhmucsanpham/lietke');
     }
     public function xoadanhmuc($id_danhmuc){
        DB::table('danhmuc')->where('id_danhmuc',$id_danhmuc)->delete(); 
        Session::put('message_them','Xoá danh mục thành công!');
        return Redirect::to('/admincp/danhmucsanpham/lietke');
    }
}
