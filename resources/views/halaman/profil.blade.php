@extends('halaman.master')
@section('content')

    <div class="user-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  <img class="profile_img" src="{{asset('template/dist/img/user2-160x160.jpg')}}" width="200" height="200" class="img-circle elevation-2 center" alt="Avatar" style="border-radius: 50%;">
                  <h3>John Doe</h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Nama:</strong>John Doe</p>
                  <p class="mb-0"><strong class="pr-1">Bio:</strong>Karyawan</p>
                  <p class="mb-0"><strong class="pr-1">Email:</strong>john@doe.com</p>
                  <p class="mb-0"><strong class="pr-1">Umur:</strong>20</p>
                  <p class="mb-0"><strong class="pr-1">Alamat:</strong>Jakarta</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <style>
        body {
    background: #67B26F; 
    background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);
    background: linear-gradient(to right, #4ca2cd, #67B26F); 
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
    }

    .user-profile .card {
    border-radius: 10px;
    }



    </style>

@endsection