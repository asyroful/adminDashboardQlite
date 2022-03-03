@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Edit Genre {{$post->id}}</h2>
  <form action="/kategori/{{$post->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{$post->nama}}" placeholder="Masukkan Nama Genre">
        @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection('content')

