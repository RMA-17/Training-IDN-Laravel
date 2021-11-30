<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan  = Jabatan::paginate(10);
        return view('jabatan.index', compact('jabatan'));
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
        $input = $request -> all();  //Data yang direkap waktu di modal tadi bakal direkap sama si $request ini
        $validator = FacadesValidator::make($input, [
            'nama_jabatan' => 'max:50',
            'gaji_pokok' => 'max:9'
        ]);
        if ($validator -> fails()) {
            return back() -> withInput();
        }
        Jabatan::create($input);
        return redirect('/jabatan'); //Redirect = Pindah halaman + bawa data, kalau back pindah halaman g bawa data
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.detail',compact('jabatan')); //Jadi compact itu mengoper variable kedalam view blade
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit',compact('jabatan')); //Jadi compact itu mengoper variable kedalam view blade
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $input = $request -> all();  //Data yang direkap waktu di modal tadi bakal direkap sama si $request ini
        $validator = FacadesValidator::make($input, [
            'nama_jabatan' => 'max:50',
            'gaji_pokok' => 'max:9'
        ]);
        if ($validator -> fails()) {
            return back() -> withInput();
        }
        $jabatan -> update($input);
        return redirect('/jabatan'); //Redirect = Pindah halaman + bawa data, kalau back pindah halaman g bawa data
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jabatan::find($id);
        $data->delete($data);
        return back();
    }
}
