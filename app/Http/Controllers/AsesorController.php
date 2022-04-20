<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesor;
use Illuminate\Support\Facades\Validator;


class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesor = Asesor::get();
        return view('admin.asesor.index', [
            'asesors' => $asesor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.asesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validasi Data Request
        $validator = Validator::make($request->all(),[
            'namaLengkap'=>'required',
            'noRegistrasi'=>'required',
            'alamat'=>'required',
            'noHP'=>'required',
            'email'=> 'required',
            'password'=>'required',
        ]);
        //Menyimpan hasil validasi
        $asesor = Asesor::create($request->all());
        return redirect()->route('asesor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataAsesor = Asesor::findOrFail($id);
        return view('admin.asesor.edit')->with([
            'asesor' => $dataAsesor
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
        //Validasi data request
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'namaLengkap'=>'required',
            'noRegistrasi'=>'required',
            'alamat'=>'required',
            'noHP'=>'required',
            'email'=> 'required',
            'password'=>'required',
        ]);

        //Menyimpan hasil validasi
        $asesor = Asesor::find($id);
        $asesor->update($request->all());
        return redirect()->route('asesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $inputasesor = Asesor::find($id);
        $inputasesor->delete();
        return redirect()->route('asesor.index');
    }
}
