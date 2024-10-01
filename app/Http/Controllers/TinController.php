<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

use App\Models\capnhat;
use App\Models\tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index(){
        $dslt = capnhat::all();
        $data= DB::table('tin')->select('tin.*','loaitin.ten as tendm')
        ->join('loaitin', 'tin.idLT','=','loaitin.id')
        ->orderBy('tin.created_at','desc')->get();
        return view('admin.page.dstin', [ 'data'=>$data, 'dslt'=>$dslt]);
    }
    function them(){
        $dslt = capnhat::all();
        return view('admin.page.themtin', ['dslt'=>$dslt]);
    }
    function them_(Request $request){
            $t = new tin;
            $t->tieuDe= $_POST['tieuDe'];
            $t->tomTat= $_POST['tomTat'];
            $t->noiDung= $_POST['noiDung'];
            // $t->urlHinh= $_POST['urlHinh'];
            if($request->hasFile('Hinh')){
                $file=$request->file('Hinh');
                $duoi=$file->getClientOriginalExtension();
                if($duoi!='jpg' && $duoi!= 'png' && $duoi !='jpeg'){
                    return redirect('/ds');
                }
                $name =$file->getClientOriginalName();
                $Hinh = str::random(4) ."_". $name;
                while(file_exists("user/".$Hinh)){
                    $Hinh = str::random(4) ."_". $name;
                }
                $file->move("user/",$Hinh);
                // unlink("slide/".$t->Hinh);
                $t->urlHinh=$Hinh;
            }
            $t->idLT= $_POST['idLT'];
            $t->save();
            return redirect('/admin1/danhsachtin');
        
    }
    function xoa($id){
        $t = Tin::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('/admin1/danhsachtin');
    }
    function capnhat($id){
        $t = Tin::find($id);
        $dslt = capnhat::all();
        if($t==null) return redirect('/thongbao');
        // dd($t);
        return view("admin.page.capnhatTin",['tin'=>$t, 'dslt'=>$dslt]);
    }
    function capnhat_($id){
        $t = Tin::find($id);
        if($t==null) return redirect('/thongbao');
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        // $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/admin1/danhsachtin');
     }
    
}



