@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Edit jawaban {{$post->id}}</h2>
  <form action="/jawaban/{{$post->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="jawaban">Jawaban</label>
        <input type="text" name="jawaban" id="jawaban" class="form-control" value="{{$post->jawaban}}" placeholder="Masukkan jawaban">
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

