@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Tambah Kategori</h2>
  <form action="/kategori" method="POST">
      @csrf
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama','')}}">
        @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection('content')