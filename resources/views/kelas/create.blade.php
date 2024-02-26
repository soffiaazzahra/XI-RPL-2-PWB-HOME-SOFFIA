@extends('template2.master');

@section('title', 'Tambah Data Kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">Masukkan Kelas</label>
            <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama_kelas"  placeholder="Nama Kelas "
           value="{{@old('nama_kelas')}}">
          </div>
          <div class="card-body">
            <div class="form-group">
              <input name="kompetensi_keahlian" type="text" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kompetensi_keahlian"  placeholder="Kompetensi Keahlian" 
              value="{{@old('kompetensi_keahlian')}}">
            </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('kompetensi_keahlian')
          <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
            <button type="reset" class="btn btn-primary">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
  </div>

@endsection