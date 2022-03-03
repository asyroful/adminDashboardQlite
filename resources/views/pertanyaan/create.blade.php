@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Tambah Pertanyaan</h2>
  <form action="/pertanyaan" method="POST">
      @csrf
      <div class="form-group">
        <label for="pertanyaan">Pertanyaan</label>
        <input type="text" name="pertanyaan" id="pertanyaan" class="form-control" value="{{ old('pertanyaan','')}}">
        @error('pertanyaan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" class="form-control" value="{{ old('gambar','')}}">
        @error('gambar')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection('content')