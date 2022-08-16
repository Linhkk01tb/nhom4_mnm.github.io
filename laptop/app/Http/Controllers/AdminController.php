<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin_login');
    }
    public function trangquanly_hienthi(){
        return view('admin.dashboard');
    }
    public function trangquanly(Request $request){
        $admin_email = $request->email_admin;
        $admin_password = md5($request->password_admin);
        $result = DB::table('admin')->where('email_admin',$admin_email)->where('password_admin',$admin_password)->first();
        if($result){
            Session::put('ten_admin',$result->ten_admin);
            Session::put('id_admin',$result->id_admin);
            return Redirect::to('/admincp/dashboard');
        }else{
            Session::put('message','Email hoặc mật khẩu không đúng!');
            return Redirect::to('/admincp/dangnhap');
        }
    }
    public function dangxuat(){
        Session::put('ten_admin',null);
        Session::put('id_admin',null);
        return Redirect::to('/admincp/dangnhap');
    }
}
