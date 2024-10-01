<?php

namespace App\Http\Controllers;

use App\Models\capnhat;
use App\Models\tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index(){
        $tinmoi=DB::table('tin')->select('id','tieuDe','urlHinh','tomTat','created_at')->orderBy('created_at','desc')->limit(10)->get();
        $listCate = capnhat::all();
        // dd($data);
        return view('client.page.home', compact('tinmoi','listCate'));
    }
    function ttdm($id){
        $data = DB::table('tin')->where('idLT', '=' , $id)->get();
        $idLT =  capnhat::find($id);
        $listCate = capnhat::all();
        //  dd($data);
        return view('client.page.tintheodm', compact('data','idLT', 'listCate'));
    }
 
    function cttin($id){
        $ctt = DB::table('tin')->where('id', $id)->first();
        $listCate = capnhat::all();
        if($ctt==null) return redirect('/thongbao');
        return view('client.page.songdep', compact('ctt','listCate'));
    }
}
