@extends('template2.master');

@section('title', 'Edit Data Kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', $kelas->id_kelass) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="exampleNamaKelas"  placeholder="Nama Kelas" value="{{ $kelas->nama_kelas}}">
          </div>
          <div class="card-body">
            <div class="form-group">
              <input name="kompetensi_keahlian" type="text" class="form-control @error('kompetensi_keahlian') {{ 'is-invalid' }} @enderror" id="exampleKompetensiKeahlian"  placeholder="Kompetensi Keahlian" value="{{ $kelas->kompetensi_keahlian}}">
            </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('kompetensi_keahlian')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection