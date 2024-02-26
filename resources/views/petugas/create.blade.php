@extends('template2.master');

@section('title', 'Tambah Data Petugas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="username">Masukkan Petugas</label>
            <input name="username" type="text" class="form-control @error('username') {{ 'is-invalid' }} @enderror" id="username"  placeholder="Username"
           value="{{@old('username')}}">
          </div>
          <div class="card-body">
            <div class="form-group">
              <input name="password" type="text" class="form-control @error('password') {{ 'is-invalid' }} @enderror" id="password"  placeholder="Password" 
              value="{{@old('password')}}">
            </div>
            <div class="card-body">
              <div class="form-group">
                <input name="nama_petugas" type="text" class="form-control @error('nama_petugas') {{ 'is-invalid' }} @enderror" id="nama_petugas"  placeholder="Nama Petugas" 
                value="{{@old('nama_petugas')}}">
              </div>
              <div class="card-body">
                <div class="form-group">
                  <select name="level" class="form-control @error('level') {{ 'is-invalid' }} @enderror" id="level">
                    <option value="" selected disabled>Pilih Level</option>
                    <option value="admin" {{ old('level') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas" {{ old('level') == 'petugas' ? 'selected' : '' }}>Petugas</option>
                  </select>
                </div>
          @error('username')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('password')
          <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
        @enderror
          @error('nama_petugas')
          <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('level')
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