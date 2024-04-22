<?php

namespace App\Http\Controllers;

use App\Models\MyPham;
use App\Models\LoaiMyPham;

use Illuminate\Http\Request;

class Trangchu_UserController extends Controller
{

    public function index()
    {
        $db = MyPham::all();

        $dbloaimp = LoaiMyPham::paginate(10);

        return view('User.index', 
        ['mp' => $db,
        'lmp' => $dbloaimp
        ]);
    }
}