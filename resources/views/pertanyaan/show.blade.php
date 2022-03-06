@extends('halaman.master')
@section('content')
<div class="m-3">
    <h4>{{$post->pertanyaan}}</h4>
    <div>{{$post->gambar}}</div>
    <h4>{{$post->kategori_id}}</h4>
</div>
@endsection