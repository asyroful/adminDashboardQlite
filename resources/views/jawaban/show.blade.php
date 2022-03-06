@extends('halaman.master')
@section('content')
<div class="m-3">
    <h4>{{$post->jawaban}}</h4>
    <div>{{$post->gambar}}</div>
    <h4>{{$post->pertanyaan_id}}</h4>
</div>
@endsection