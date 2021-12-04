<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SchoolClassRequest;
use App\Models\SchoolClassModel;
use App\Models\User;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = SchoolClassModel::orderBy('nama')->get();

        return view('pages.admin.schoolClass.index', [
            'classes' => $classes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.schoolClass.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolClassRequest $request)
    {
        $validatedData = $request->all();

        SchoolClassModel::create($validatedData);
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = SchoolClassModel::findOrFail($id);
        $users = User::where('class_id', $id)->get();

        return view('pages.admin.schoolClass.show', [
            'class' => $class,
            'users' => $users
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
        $class = SchoolClassModel::findOrFail($id);

        return view('pages.admin.schoolClass.edit', [
            'class' => $class
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SchoolClassRequest $request, $id)
    {
        $validatedData = $request->all();

        SchoolClassModel::findOrFail($id)
            ->update($validatedData);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SchoolClassModel::destroy($id);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil di hapus!');
    }
}
