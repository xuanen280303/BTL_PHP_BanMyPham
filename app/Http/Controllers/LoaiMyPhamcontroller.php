<?php

namespace App\Http\Controllers;

use App\Models\LoaiMyPham;
use App\Models\MyPham;
use Illuminate\Http\Request;

class LoaiMyPhamcontroller extends Controller
{
    public function index()
    {
        $db = LoaiMyPham::paginate(4);
        return view('Admin.LoaiMyPham.index',['lmp'=>$db]);
    }

    public function create()
    {
        return view('Admin.LoaiMyPham.edit');
    }

    // Hiển thị mỹ phẩm theo danh mục
    public function show($id)
    {
        $lmp = MyPham::where('MaLoaiMP', $id)->get();
        return view('User.category', ['lmp' => $lmp]);
    }

    public function save(Request $res, $id)
    {
        if($id==0){
            $lmp = new LoaiMyPham();
            $mp->TenLoaiMP = $res->TenLoaiMP;
            $mp->AnhDaiDien = $res->AnhDaiDien;
            $mp->MoTa = $res->MoTa;

        }else{
            $mp = LoaiMyPham::where('MaLoaiMP',$id)->first();
            $mp->TenLoaiMP = $res->TenLoaiMP;
            $mp->AnhDaiDien = $res->AnhDaiDien;
            $mp->MoTa = $res->MoTa;
        }    

        $mp->save();
        return redirect()->route('Admin.LoaiMyPham.index');
    }

    public function edit($id)
    {
        $db = LoaiMyPham::where('MaLoaiMP',$id)->first();
        return view('Admin.LoaiMyPham.edit', ['lmp' => $db]);
    }

    public function destroy($id)
    {
        $db = LoaiMyPham::where('MaLoaiMP',$id)->first()->delete();
        return redirect()->route('Admin.LoaiMyPham.index');
    }
}
