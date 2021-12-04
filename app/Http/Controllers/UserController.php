<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UserRequest;
use App\Models\SchoolClassModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $profil = SchoolClassModel::findOrFail(1);
        $user = User::findOrFail($id);

        return view('pages.user.index',[
            'profil' => $profil,
            'user' => $user
        ]);
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
    public function show($id)
    {
        $profil = SchoolClassModel::findOrFail(1);
        $user = User::findOrFail($id);

        return view('pages.user.show',[
            'profil' => $profil,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = SchoolClassModel::findOrFail(1);
        $user = User::find($id);
        $classes = SchoolClassModel::all();

        return view('pages.user.edit',[
            'profil' => $profil,
            'user' => $user,
            'classes' => $classes
        ]);
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
        $user = User::findOrFail($id);

        if ($request->email == $user->email) {
            $validation_email = 'required|email:dns';
        } else {
            $validation_email = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => $validation_email,
            'class_id' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        $validatedData['image'] = $request->file('image')->store(
            'assets/images', 'public'
        );

        User::findOrFail($id)->update($validatedData);

        return redirect()->route('user.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        if (Auth::user()->role == 'ADMIN') {
            return redirect()->route('daftar-siswa')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect()->route('user.index')->with('success', 'Data berhasil dihapus!');
        }
        
    }
}
