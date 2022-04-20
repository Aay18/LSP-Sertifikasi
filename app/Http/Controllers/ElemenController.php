<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Elemen;
use Illuminate\Support\Facades\Validator;

class ElemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari tabel elemen
        $elemen = Elemen::get();
        return view('admin.elemen.index',[
            'elemens'=>$elemen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('elemen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table elemen sesuai pencarian data
		$elemens = DB::table('elemens')
		->where('namaElemen','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data elemen ke view index
		return view('admin.elemen.index',['elemens' => $elemens]);
 
	}
    public function store(Request $request)
    {
       //Validasi Data Request
       $validator = Validator::make($request->all(),[
           'namaElemen'=>'required',
    ]);
        //Menyimpan dari hasil validasi
        $elemen = Elemen::create($request->all());
        return redirect()->route('elemen.index');
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
        $dataElemen = Elemen::findOrFail($id);
        return view('admin.elemen.edit')->with([
            'elemens' => $dataElemen
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
        $validator = Validator::make($request->all(),[
            'namaElemen'=>'required',
        ]);
        $elemen = Elemen::find($id);
        $elemen->update($request->all());
        return redirect()->route('elemen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elemen = Elemen::find($id);
        $elemen->delete();
        return redirect()->route('elemen.index');
    }
}
