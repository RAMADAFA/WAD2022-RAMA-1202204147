@extends('after.header')
@section('content')
 @auth

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Document</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/asset/style/index.css" rel="stylesheet">
</head>

<body>

  <!-- List Start -->
  <section id="list">
    <div class="container">
      <div>
        <h1>My Show Room</h1>
        <p>List Show Room rama_1202204147</p>
        <div class="d-flex gap-5">
        <h4><a href=""></a></h4>
          @foreach($mobils as $mobil)

            <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/image/{{$mobil->image}}" class="card-img-top" alt="gambar mobil"
                            style="width: 288px; height:190px;">
                        <div class="card-body">
                            <h5 class="card-title">{{$mobil->name}}</h5>
                            <p class="card-text">{{$mobil->description}}</p>
                            <a href="/mobil/{{$mobil-> id}}/edit" class="btn btn-primary">Detail</a>
                            <form action="/mobil/{{ $mobil-> id }}" method ="POST" style="display: inline-block">
                              @csrf
                                    @method('DELETE')
                                    <form action="/mobil/{{ $mobil-> id }}" method ="POST" style="display: inline-block">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                        </div>
                    </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  
  <!-- List End -->


@endauth
@endsection