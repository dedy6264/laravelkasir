@extends('head.one')
@section('title', 'Page Title')
@section('header')
    @parent
    <h1>Welcome Dedy</h1>
@endsection
@section('kontent')
    @foreach($p as $p)
    <form action="/simpan_ubah" method="post">
    @csrf
    <input type="text" name="nama_p" id="" placeholder="nama" value="{{$p->nama_p}}">
    <input type="text" name="id" id="" hidden value="{{$p->id}}">
    <input type="text" name="kode_p" id="" placeholder="kode" value="{{$p->kode_p}}">
    <input type="number" name="harga" id="" placeholder="harga" value="{{$p->harga}}">
    <input type="text" name="satuan" id="" placeholder="satuan" value="{{$p->satuan}}">
    <button type="submit" value="submit" name="submit">Simpan</button>
    </form>
    @endforeach

@endsection
