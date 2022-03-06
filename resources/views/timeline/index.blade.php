@extends('halaman.master')
@section('content')
    <div class= "m-3">
        <div class="card">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success')}}
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">Timeline</h3>
            </div>
            
            <div class="card-body">
                <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New Question</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Pertanyaan</th>
                            <th>Gambar</th>
                            <th>User</th>
                            <th>Kategori</th>
                            <th style="width: 40px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pertanyaan as $key => $post)
                        <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $post->pertanyaan }}</td>
                        <td>{{ $post->gambar }}</td>
                        <td>{{ $post->users->name }}</td>
                        <td>{{ $post->kategori->nama }}</td>
                        <td style="display: flex;" class="mx-2">
                            <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm mx-1">Show</a>
                            <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-default btn-sm mx-1">Edit</a>
                            <form action="/pertanyaan/{{$post->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm mx-1">
                            </form>
                        </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">No data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection