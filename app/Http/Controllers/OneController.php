<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('stage1/home');
    }

    /*
    homepage, halaman awal, welcome
    */
    public function home()
    {
        $data=\DB::table('produk')->get();
        return view('1',['p'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('2');
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
        return redirect('/create');
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
        return view('edit',['p'=>$data]);
    }
    public function delete($id)
    {
        $data=\DB::table('produk')->where('id',$id)->delete();
        return redirect('/');
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
           // 'kode_p'=>$request->kode_p,
            //'harga'=>$request->harga,
         //   'satuan'=>$request->satuan
        ]);
        //echo $request->nama_p;
        return redirect('/create');
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
}
