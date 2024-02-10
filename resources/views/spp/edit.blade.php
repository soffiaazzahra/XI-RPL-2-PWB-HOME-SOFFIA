@extends('template2.master');

@section('title', 'Edit Data Spp')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('spp.update', $spp->id_spps) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="tahun">Nama Spp</label>
            <input name="tahun" type="text" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="exampleTahun"  placeholder="Tahun Spp" value="{{ $spp->tahun}}">
          </div>
          <div class="card-body">
            <div class="form-group">
              <input name="nominal" type="text" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="exampleNominal"  placeholder="Nominal Spp" value="{{ $spp->nominal}}">
            </div>
          @error('tahun')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          @error('nominal')
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