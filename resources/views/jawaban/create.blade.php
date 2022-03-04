@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Tambah jawaban</h2>
  <form action="/jawaban" method="POST">
      @csrf
      <div class="form-group">
        <label for="jawaban">Jawaban</label>
        <input type="text" name="jawaban" id="jawaban" class="form-control" value="{{ old('jawaban','')}}">
        @error('jawaban')
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