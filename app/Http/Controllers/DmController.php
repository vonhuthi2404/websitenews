<?php

namespace App\Http\Controllers;

use App\Models\capnhat;
use App\Models\tin;
use Illuminate\Http\Request;

class DmController extends Controller
{
    function danhmuc(){
        $dm = capnhat::all();
        return view('admin.page.danhmuc', ['dm'=>$dm]);
    }
    function xoa_dm($id){
        $dm = capnhat::find($id);
        if ($dm==null) return redirect('/thongbao');
        $dm->delete();
        return redirect('/admin1/danhmuc');
    }
    function capnhat_dm($id){
        $dslt = capnhat::find($id);
        if($dslt==null) return redirect('/thongbao');
        return view("admin.page.capnhatDm",['dslt'=>$dslt]);
    }
    function capnhat_dm_($id){
        $dslt = capnhat::find($id);
        if($dslt==null) return redirect('/thongbao');
        $dslt->ten = $_POST['ten'];
        // $t->urlHinh = $_POST['urlHinh'];
        $dslt->save();
        return redirect('/admin1/danhmuc');
     }
     function them(){
        return view('admin.page.themdm');
    }
     function them_(){
        $t = new capnhat;
        $t->ten= $_POST['ten'];
        $t->save();
        return redirect('/admin1/danhmuc');
    
}
}
