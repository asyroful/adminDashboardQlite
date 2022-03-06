@extends('halaman.master')
@section('content')
    <!--<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <h2>Search the question</h2>
        <ul class="nav">
            <li><input type="text" name="search" class="form-control"></li>
            <li><button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button></li>
        </ul>
      </div>
    </section>-->

    <section class="inner-page">
      <div class="container">
        <div class="row">
          @forelse($pertanyaan as $key => $post)
            <div class="col-md-10">
                <div class="card mb-2">     
                    <div class="card-body">
                    <h3><a href="">{{ $post->pertanyaan }}</a></h3>
                    <p class="small"><b>{{ $post->users->name }} | {{ $post->created_at }}</b></p>
                    <img src="{{asset('uploads/'.$post->gambar)}}" class="card-img-top">                                                
                        <a href="/landing/show" class="small">Lihat Jawaban|</a>
                        <a href="#" class="small">Jawab |</a>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan="4" align="center">No data</td>
            </tr>
          @endforelse
        </div>
      </div>
    </section>

@endsection