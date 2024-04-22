<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class TaiKhoancontroller extends Controller
{
    public function index()
    {
        $db = TaiKhoan::all();
        return view('Admin.TaiKhoan.index',['tk'=>$db]);
    }

    public function create()
    {
        return view('Admin.TaiKhoan.edit');
    }

    public function save(Request $res, $id)
    {
        if($id == 0){
            $tk = new TaiKhoan();
        } else {
            $tk = TaiKhoan::findOrFail($id);
        }
        $tk->TenTaiKhoan = $res->TenTaiKhoan;
        $tk->MatKhau = $res->MatKhau;
        $tk->Email = $res->Email;
        $tk->SDT = $res->SDT;
        $tk->Quyen = $res->Quyen;

        $tk->save();
        return redirect()->route('Admin.TaiKhoan.index');
    }

    //-------- Đăng ký User-----------
    public function signupcustomer(Request $res)
    {
        $ktrataikhoan = TaiKhoan::where('TenTaiKhoan', $res->TenTaiKhoan)->first();
        if ($ktrataikhoan) {
            return back()->withErrors(['TenTaiKhoan' => 'Tên tài khoản đã tồn tại!']);
        }

        $tk = new TaiKhoan();
        $tk->TenTaiKhoan = $res->TenTaiKhoan;
        $tk->MatKhau = $res->MatKhau;
        $tk->Email = $res->Email;
        $tk->SDT = $res->SDT;
        $tk->Quyen = 2;
        $tk->save();
        return view('User.logincustomer');
    }

    //--------- Đăng nhập User-----------------
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $user = TaiKhoan::where('TenTaiKhoan', $username)->first();

        if ($user) {
            if ($user->MatKhau == $password) {
                return redirect()->route('index'); 
            } else {
                return view('User.logincustomer')->withErrors(['loginError' => 'Sai mật khẩu!']);
            }
        } else {
            return view('User.logincustomer')->withErrors(['loginError' => 'Tài khoản không tồn tại!']);
        }
    }

    public function edit($id)
    {
        $db = TaiKhoan::where('MaTaiKhoan',$id)->first();
        return view('Admin.TaiKhoan.edit', ['tk' => $db]);
    }

    public function destroy($id)
    {
        $db = TaiKhoan::where('MaTaiKhoan',$id)->first()->delete();
        return redirect()->route('Admin.TaiKhoan.index');
    }
}
