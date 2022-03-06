@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Edit Pertanyaan {{$post->id}}</h2>
  <form action="/pertanyaan/{{$post->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="pertanyaan">Pertanyaan</label>
        <input type="text" name="pertanyaan" id="pertanyaan" class="form-control" value="{{$post->pertanyaan}}" placeholder="Masukkan pertanyaan">
        @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar" class="form-control" value="{{$post->gambar}}" placeholder="Masukkan Gambar">
        @error('gambar')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection('content')

