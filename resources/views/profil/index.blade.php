@extends('halaman.master')
@section('content')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->


          
          <div class="row gutters-sm">
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{Auth::user()->name}}</h4>
                      <p class="text-secondary mb-1">{{Auth::user()->email}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-8">
              <div class="card">
                  <div class="card-body">
                    
            <form action="/profil/{{$profil->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <div class="row mb-3">
                <div class="col">
              <label for="pertanyaan">Biodata</label>
              <input type="text" name="bio" id="bio" class="form-control" value="{{$profil->bio}}" placeholder="Biodata">
              @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
              </div>
            </div>
            <div class="form-group">
              <label for="pertanyaan">Alamat</label>
              <input type="text" name="alamat" id="alamat" class="form-control" value="{{$profil->alamat}}" placeholder="Alamat">
              @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="pertanyaan">Umur</label>
              <input type="text" name="umur" id="umur" class="form-control" value="{{$profil->umur}}" placeholder="Umur">
              @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
          @include('sweetalert::alert')
                  </div>
              </div>
            </div>

            
                      
                  </div>
              </div>

            </div>
          </div>

        </div>
    </div>
  
@endsection