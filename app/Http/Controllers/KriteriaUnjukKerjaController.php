<?php

namespace App\Http\Controllers;

use App\Models\KriteriaUnjukKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KriteriaUnjukKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteriaUnjukKerja = KriteriaUnjukKerja::all();
        return view('admin.kriteria_unjuk_kerja.index',[
            'kriteriaUnjukKerjas' => $kriteriaUnjukKerja
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kriteriaunjukkerja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validasi data request
        $validator = Validator::make($request->all(),[
            'namaElemen'=>'required',
            'kriteriaUnjukKerja'=> 'required',
          
        ]);
        //Menyimpan dari hasil validasi
        $kriteriaUnjukKerja = KriteriaUnjukKerja::create($request->all());
        return redirect()->route('kriteriaunjukkerja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KriteriaUnjukKerja  $kriteriaUnjukKerja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KriteriaUnjukKerja  $kriteriaUnjukKerja
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataKriteriaUnjukKerja = KriteriaUnjukKerja::findOrFail($id);
        return view('admin.kriteriaunjukkerja.edit')->with([
            'kriteriaaunjukkerjas' => $dataKriteriaUnjukKerja
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KriteriaUnjukKerja  $kriteriaUnjukKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Validasi data request
        $validator = Validator::make($request->all(),[
            'namaElemen'=>'required',
            'kriteriaUnjukKerja'=> 'required',
        ]);
         //Memperbaharui dari hasil validasi
         $kriteriaUnjukKerja = KriteriaUnjukKerja::find($id);
         $kriteriaUnjukKerja->update($request->all());
         return redirect()->route('kriteriaunjukkerja.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\KriteriaUnjukKerja  $kriteriaUnjukKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $inputKriteriaUnjukKerja = KriteriaUnjukKerja::find($id);
        $inputKriteriaUnjukKerja->delete();
        return redirect()->route('kriteriaunjukkerja.index');
    }
}
