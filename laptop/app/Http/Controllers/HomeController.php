<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $danhmuc = DB::table('danhmuc')->where('trangthai','0')->get();
        $sanpham = DB::table('sanpham')->where('trangthai','0')->get();
        return view('pages.home')->with('danhmuc',$danhmuc)->with('sanpham',$sanpham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_danhmuc)
    {
        //
        $danhmuc = DB::table('danhmuc')->where('trangthai','0')->get();
        $sanpham = DB::table('sanpham')->where('trangthai','0')->get();
        $danhmuc_theo_id = DB::table('sanpham')->join('danhmuc','sanpham.id_danhmuc','=','danhmuc.id_danhmuc')->where('danhmuc.id_danhmuc',$id_danhmuc)->get();
        return view('pages.danhmuc.hienthi')->with('danhmuc',$danhmuc)->with('sanpham',$sanpham)->with('danhmuc_theo_id',$danhmuc_theo_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
