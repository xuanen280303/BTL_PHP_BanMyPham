<?php

namespace App\Http\Controllers;

use App\Models\MyPham;
use Illuminate\Http\Request;

class MyPhamcontroller extends Controller
{
    //Hiển thị kq truy vấn và phân trang
    public function index(Request $request)
    {
        //Tạo biến query để nhận kết quả truy vấn trong table MyPham
        $query = MyPham::query();
        //Nếu search có giá trị thì khởi chạy
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('TenMP', 'LIKE', '%' . $search . '%')
                ->orWhere('XuatXu', 'LIKE', '%' . $search . '%')
                ->orWhere('SLTon', '=', $search);
        });
    }
        $db = $query->paginate(4);
        return view('Admin.MyPham.index',['mp'=>$db]);
    }

    public function create()
    {
        return view('Admin.MyPham.edit');
    }
    
    // Hiển thị ra chi tiết mỹ phẩm
    public function show($id)
    {
        $mp = MyPham::findOrFail($id);
        return view('User.productdetail', ['mp' => $mp]);
    }

    public function save(Request $res, $id)
    {
        if($id==0){
            $mp = new MyPham();
            $mp->TenMP = $res->TenMP;
            $mp->MaLoaiMP = $res->MaLoaiMP;
            $mp->GiaBan = $res->GiaBan;
            $mp->XuatXu = $res->XuatXu;
            $mp->KhoiLuong = $res->KhoiLuong;
            $mp->NgaySX = $res->NgaySX;
            $mp->HSD = $res->HSD;
            $mp->SLTon = $res->SLTon;
            $mp->AnhDaiDien = $res->AnhDaiDien;
            $mp->MoTa = $res->MoTa;
            $mp->GhiChu = $res->GhiChu;

        }else{
            $mp = MyPham::where('MaMP',$id)->first();
            $mp->TenMP = $res->TenMP;
            $mp->MaLoaiMP = $res->MaLoaiMP;
            $mp->GiaBan = $res->GiaBan;
            $mp->XuatXu = $res->XuatXu;
            $mp->KhoiLuong = $res->KhoiLuong;
            $mp->NgaySX = $res->NgaySX;
            $mp->HSD = $res->HSD;
            $mp->SLTon = $res->SLTon;
            $mp->AnhDaiDien = $res->AnhDaiDien;
            $mp->MoTa = $res->MoTa;
            $mp->GhiChu = $res->GhiChu;
        }    

        $mp->save();
        return redirect()->route('Admin.MyPham.index');
    }
    
    public function edit($id)
    {
        $db = MyPham::where('MaMP',$id)->first();
        return view('Admin.MyPham.edit', ['mp' => $db]);
    }

    public function destroy($id)
    {
        $db = MyPham::where('MaMP',$id)->first()->delete();
        return redirect()->route('Admin.MyPham.index');
    }
}
