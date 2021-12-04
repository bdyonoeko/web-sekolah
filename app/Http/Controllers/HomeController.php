<?php

namespace App\Http\Controllers;

use App\Models\AnswerModel;
use App\Models\SchoolClassModel;
use App\Models\SchoolProfileModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){
        $profil = SchoolProfileModel::findOrFail(1);

        return view('pages.home', [
            'profil' => $profil,
        ]);
    }

    public function profil_sekolah(Request $request){
        $profil = SchoolProfileModel::findOrFail(1);

        return view('pages.schoolProfile', [
            'profil' => $profil,
        ]);
    }

    public function kelas(Request $request){
        $profil = SchoolProfileModel::findOrFail(1);
        $classes = SchoolClassModel::orderBy('nama')->get();

        return view('pages.classes', [
            'profil' => $profil,
            'classes' => $classes,
        ]);
    }

    public function detail_kelas(Request $request, $id){
        $profil = SchoolProfileModel::findOrFail(1);
        $class = SchoolClassModel::findOrFail($id);
        $users = User::where('class_id', $id)->get();
        // $answer = AnswerModel::with(['user', 'kelas'])->get();
        // $answer =AnswerModel::where('class_id', $id)->where('user_id', Auth::user()->id)->get();

        return view('pages.classDetail', [
            'profil' => $profil,
            'class' => $class,
            'users' => $users,
            // 'answer' => $answer
        ]);
    }
}
