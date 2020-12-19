@extends('layout.nav')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">

            <div class="card ">
                <div class="card-body">
                  <h5 class="card-title">Contact Information</h5>
                  <ul class="list-group  list-group-flush">
                    <li class="list-group-item border-0"><b><i class="fas fa-mobile-alt" style="font-size: 18px;"></i></b>&nbsp;&nbsp;&nbsp;09222176791</li>
                    <li class="list-group-item border-0"><b><i class="fas fa-envelope" style="font-size: 18px;"></i></b>&nbsp;&nbsp;&nbsp;jmanzano.ihub@gmail.com</li>
                    <li class="list-group-item"><b><i class="fas fa-map-marker-alt" style="font-size: 18px;"></i></b>&nbsp;&nbsp;&nbsp;Pardo Cebu City</li>
                  </ul>
                </div>
              </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('logo/pngwing.com.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

@endsection
