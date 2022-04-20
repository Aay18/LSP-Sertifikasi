<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwal.index',[
            'jadwals' => $jadwal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
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
            'skema'=>'required',
            'tanggalMulai'=> 'required|date',
            'tanggalAkhir'=> 'required|date|after:tanggalMulai',
        ]);
        //Menyimpan dari hasil validasi
        $jadwal = Jadwal::create($request->all());
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataJadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit')->with([
            'jadwals' => $dataJadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Validasi data request
        $validator = Validator::make($request->all(),[
            'skema'=>'required',
            'tanggalMulai'=> 'required|date',
            'tanggalAkhir'=> 'required|date|after:tanggalMulai',
        ]);
         //Memperbaharui dari hasil validasi
         $jadwal = Jadwal::find($id);
         $jadwal->update($request->all());
         return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $inputJadwal = Jadwal::find($id);
        $inputJadwal->delete();
        return redirect()->route('jadwal.index');
    }
}
