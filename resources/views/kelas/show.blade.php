@extends('template2.master')

@section('h1')
Kelas
@endsection

@section('content')
<div>
    <h1>Kelas</h1>
    <h1>Nama Kelas: {{$kelas->nama_kelas}}</h1>
    <h1>Kompetensi Keahlian: {{$kelas->kompetensi_keahlian}}</h1>
</div>
@endsection