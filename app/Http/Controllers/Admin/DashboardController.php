<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolProfileModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        $profil = SchoolProfileModel::find(1);

        return view('pages.admin.schoolProfile.index', [
          'profil' =>  $profil     
        ]);
    }

    public function daftar_siswa(Request $request){
        $users = User::where('role', 'SISWA')->get();

        return view('pages.admin.user.index', [
          'users' =>  $users     
        ]);
    }
}
