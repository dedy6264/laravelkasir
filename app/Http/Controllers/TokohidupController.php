<?php

namespace App\Http\Controllers;

use App\tokohidup;
use Illuminate\Http\Request;

class TokohidupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('th/home');
    }

    /*
    homepage, halaman awal, welcome
    */
    public function data_produk()
    {
        $data=\DB::table('produk')->get();
        return view('th/data_p',['p'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('th/add_p');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::table('produk')->insert([
            'nama_p'=>$request->nama_p,
            'kode_p'=>$request->kode_p,
            'harga'=>$request->harga,
            'satuan'=>$request->satuan
        ]);
        //echo $request->nama_p;
        return redirect('/data_p');
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
        $data=\DB::table('produk')->where('id',$id)->get();
        return view('th/ubah',['p'=>$data]);
    }
    
    public function delete($id)
    {
        $data=\DB::table('produk')->where('id',$id)->delete();
        return redirect('data_p');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        \DB::table('produk')->where('id',$request->id)->update([
            'nama_p'=>$request->nama_p,
           'kode_p'=>$request->kode_p,
           'harga'=>$request->harga,
            'satuan'=>$request->satuan
        ]);
        //echo $request->nama_p;
        return redirect('data_p');
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
    }
    public function nyb()
    {
        return view('th/nyoba');
    }
}