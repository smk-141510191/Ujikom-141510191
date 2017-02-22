<?php

namespace App\Http\Controllers;

use Request;
use App\jabatan;
use App\golongan;
use App\tunjangan;
use Validator;
use Input;

class TunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tunjangan = tunjangan::all();
        return view ('tunjangan.index', compact('tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tunjangan = tunjangan::all();
         $jabatan = jabatan::all();
         $golongan = golongan::all();
         return view ('tunjangan.create', compact('tunjangan','jabatan','golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tunjangan=Request::all();
        $rules=['kode_tunjangan'=>'required:tunjangans',
                'id_jabatan'=>'required:tunjangans',
                'id_golongan'=>'required:tunjangans',
                'status'=>'required:tunjangans',
                'jumlah_anak'=>'required:tunjangans',
                'besaran_uang'=>'required:tunjangans' ];

         $message=[ 'kode_tunjangan.required'=>'Kolom Jangan Kosong',
                    'id_jabatan.required'=>'Kolom Jangan Kosong', 
                    'id_golongan.required'=>'Kolom Jangan Kosong',
                    'status.required'=>'Kolom Jangan Kosong',
                    'jumlah_anak.required'=>'Kolom Jangan Kosong',
                    'besaran_uang.required'=>'Kolom Jangan Kosong' ];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect('/tunjangan/create')
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
        tunjangan::create($tunjangan);
        return redirect('tunjangan');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $tunjangan=tunjangan::find($id);
        return view('tunjangan.edit',compact('tunjangan'));
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
        //
         $dataUpdate=Request::all();
        $tunjangan=tunjangan::find($id);
        $tunjangan->update($dataUpdate);
        return redirect('tunjangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        tunjangan::find($id)->delete();
        return redirect('tunjangan');
    }
}
