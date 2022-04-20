<?php

namespace App\Http\Controllers;

use App\Models\UnitKompetensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnitKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitKompetensi = UnitKompetensi::all();
        return view('admin.unit_kompetensi.index',[
            'unitKompetensis' => $unitKompetensi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unitkompetensi.create');
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
            'kodeUnit'=>'required',
            'judulUNit'=> 'required',
            'jenisStandar'=> 'required',
            'skema'=> 'required',
          
        ]);
        //Menyimpan dari hasil validasi
        $unitKompetensi = UnitKompetensi::create($request->all());
        return redirect()->route('unitkompetensi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UnitKompetensi  $unitKompetensi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UnitKompetensi  $unitKompetensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataUnitKompetensi = UnitKompetensi::findOrFail($id);
        return view('admin.unit_kompetensi.edit')->with([
            'unitKompetensi' => $dataUnitKompetensi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UnitKompetensi  $unitKompetensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Validasi data request
        $validator = Validator::make($request->all(),[
            'kodeUnit'=>'required',
            'judulUNit'=> 'required',
            'jenisStandar'=> 'required',
            'skema'=> 'required',
        ]);
         //Memperbaharui dari hasil validasi
         $unitKompetensi = UnitKompetensi::find($id);
         $unitKompetensi->update($request->all());
         return redirect()->route('unitkompetensi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UnitKompetensi  $unitKompetensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $inputUnitKompetensi = UnitKompetensi::find($id);
        $inputUnitKompetensi->delete();
        return redirect()->route('unitkompetensi.index');
    }
}
