@extends('template2.master')

@section('h1')
Kelas
@endsection

@section('content')
<div>
    <h1>Kelas</h1>
    <h1>Username: {{$petugas->username}}</h1>
    <h1>Password: {{$petugas->password}}</h1>
    <h1>Nama Petugas: {{$petugas->nama_petugas}}</h1>
    <h1>Level: {{$petugas->level}}</h1>
</div>
@endsection