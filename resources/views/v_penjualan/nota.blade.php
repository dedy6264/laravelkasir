@extends('head.m_penjualan')
@section('title', 'penjualan')
@section('header')
    @parent
    <h1>Welcome Dedy</h1>
@endsection
@section('kontent')
<form action="" method="">
    barang : <Input type="text" name="" value="" placeholder=""></input>
    harga : <Input type="text" name="" value="" placeholder=""></input>
    qty : <Input type="text" name="" value="" placeholder=""></input>
    total : <Input type="text" name="" value="" placeholder=""></input>
    <p>tambah</p><br>
    <button type="submit" name="submit" >Bayar</button>
</form>
@endsection
