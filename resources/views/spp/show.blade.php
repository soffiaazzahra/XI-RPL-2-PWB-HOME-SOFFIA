@extends('template2.master')

@section('h1')
Spp
@endsection

@section('content')
<div>
    <h1>Spp</h1>
    <h1>Tahun: {{$spp->tahun}}</h1>
    <h1>Nominal: {{$spp->nominal}}</h1>
</div>
@endsection