@extends('halaman.master')
@section('content')
<div class="m-3">
  <h2>Tambah Jawaban</h2>
  <form action="/jawaban" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="jawaban">Jawaban</label>
        <input type="text" name="jawaban" id="jawaban" class="form-control" value="{{ old('jawaban','')}}">
        @error('jawaban')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control" id="gambar" value="{{ old('gambar','')}}">
      </div>
      <div class="form-group">
        <label>Pertanyaan</label>
        <select name="pertanyaan_id" class="form-control" id="">
          <option value="">--Pilih Pertanyaan--</option>
          @foreach ($pertanyaan as $item)
              <option value="{{$item->id}}">{{$item->pertanyaan}}</option>             
          @endforeach
        </select>
        @error('pertanyaan_id')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection('content')