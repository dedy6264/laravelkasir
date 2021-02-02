@extends('head.one')
@section('title', 'Page Title')
@section('header')
    @parent
    <h1>Welcome Dedy</h1>
@endsection
@section('kontent')
    <form action="/simpan_p" method="post">
    @csrf
    <input type="text" name="nama_p" id="" placeholder="nama" autofocus>
    <input type="text" name="kode_p" id="" placeholder="kode">
    <input type="number" name="harga" id="" placeholder="harga">
    <input type="text" name="satuan" id="" placeholder="satuan">
    <button type="submit" value="submit" name="submit">Simpan</button>
    </form>
    
@endsection