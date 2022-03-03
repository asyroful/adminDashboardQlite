@extends('halaman.master')
@section('content')

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img class="profile_img" src="{{asset('template/dist/img/user2-160x160.jpg')}}" width="200" height="200" class="img-circle elevation-2 center" alt="Avatar" style="border-radius: 50%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">INFORMASI PENGGUNA</h5>
              <p>@user_id</p>
              <p class="mb-0"><strong class="pr-1">Nama:</strong>John Doe</p>
              <p class="mb-0"><strong class="pr-1">Bio:</strong>Karyawan</p>
              <p class="mb-0"><strong class="pr-1">Email:</strong>john@doe.com</p>
              <p class="mb-0"><strong class="pr-1">Umur:</strong>20</p>
              <p class="mb-0"><strong class="pr-1">Alamat:</strong>Jakarta</p>
            </div>
          </div>
        </div>
      </div>

    <style>
        body {
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