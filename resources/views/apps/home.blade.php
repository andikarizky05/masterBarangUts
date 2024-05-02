@extends('layouts.app')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ Vite::asset('resources/images/home/1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kualitas Terbaik</h5>
          <p>Kami akan memberikan hasil terbaik kami untuk pelangan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ Vite::asset('resources/images/home/wp2878688.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>“Ecological”</h5>
          <p>Semua hasil kebun kami diproses tanpa menggunakan pengawet.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ Vite::asset('resources/images/home/3.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nutrisi</h5>
          <p>Kami menjaga nutrisi dan zat gizi dari hasil kebun kami.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<br><br>
  <div class="container text-center">
    <div class="row row-cols-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/images/home/11.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Menggunakan pupuk hijau, pupuk organik yang berasal dari tanaman atau sisa panen.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/images/home/12.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Menggunakan pupuk kandang, pupuk organik yang berasal dari kotoran hewan, seperti sapi, ayam, kambing, dan babi.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/images/home/15.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Menggunakan pupuk kompos, pupuk organik yang dibuat dengan menguraikan bahan-bahan organik, seperti sisa makanan, daun, jerami, atau bahan organik lainnya.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="{{ Vite::asset('resources/images/home/14.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Ditanam di tanah humus yang meruapakan tanah subur yang terbentuk dari bahan organik yang telah terdekomposisi oleh mikroorganisme.</p>
            </div>
          </div>
    </div>
  </div>
<br>
<br>
<div class="card text-center">
  <div class="card-header">
    Memberikan yang Terbaik
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>"Tangan yang tekun merawat, bumi memberi hasil terbaik."</p>
      <footer class="blockquote-footer">Hasil terbaik dari tangan tekun <cite title="Source Title">yang berkualitas.</cite></footer>
    </blockquote>
  </div>
</div>
@endsection
