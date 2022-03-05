@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Tambah Pertanyaan</h2>
  <form action="/pertanyaan" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="pertanyaan">Pertanyaan</label>
        <input type="text" name="pertanyaan" id="pertanyaan" class="form-control" value="{{ old('pertanyaan','')}}">
        @error('pertanyaan')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control" id="">
        @error('gambar')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Kategori</label>
        <select name="kategori_id" class="form-control" id="">
          <option value="">--Pilih Kategori--</option>
          @foreach ($kategori as $item)
              <option value="{{$item->id}}">{{$item->nama}}</option>             
          @endforeach
        </select>
        @error('kategori_id')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection('content')