<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SkemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $SkemaSertifikasi = Skema::get();
        return view('admin.skema.index', [
            'skemas' => Skema::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skema.create');
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
    //  dd($request->all());
     $validator = Validator::make($request->all(),[
        'namaSkema'=>'required',
        'kodeSkema'=>'required',
        'status'=>'required',
    ]);
    //Menyimpan dari hasil validasi
    $skema = Skema::create($request->all());
    return redirect()->route('skema.index');
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
        $dataSkema = Skema::findOrFail($id);
        return view('admin.skema.edit')->with([
            'skema' => $dataSkema
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
        $updateSkema = $request->all();
        $intiSkema = Skema::findOrFail($id);
        $intiSkema->update($updateSkema);
        return redirect('skema');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $SkemaSpesifik = Skema::findOrFail($id_skema);
        // $SkemaSpesifik->delete();
        $skema = Skema::find($id);
        $skema->delete();
        return redirect()->route('skema.index');
    }
}
