@extends('head.one')
@section('title', 'Page Title')
@section('header')
    @parent
    <h1>Welcome Dedy</h1>
@endsection
@section('kontent')
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kode</th>
                <th scope="col">Harga</th>
                <th scope="col">Satuan</th>
                <th scope="col">OPR</th>
                </tr>
            </thead>
            <tbody>
                        @foreach($p as $p)
                        <tr scope="row" class="table-info"x>
                            <td></td>
                            <td>{{$p->nama_p}}</td>
                            <td>{{$p->kode_p}}</td>
                            <td>{{$p->harga}}</td>
                            <td>{{$p->satuan}}</td>
                            <td><a href="/ubah/{{$p->id}}">Edit<br>
                            <a href="/hapus/{{$p->id}}">hapus</td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
        @endsection
