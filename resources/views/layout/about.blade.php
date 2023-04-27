@extends('layout.main')

@section('content')

    <!-- about section -->
 
    <section class="offer_section layout_padding">
      <div class="container">
        <div class="box">
          <div class="detail-box">
            <h2>
              Tavsiyalar
            </h2>
            <h3>
              5% skidka <br>
              turli xil shokoladlar
            </h3>
            <a href="">
              Hozr oling
            </a>
          </div>
          <div class="img-box">
            <img src="assets/images/offer-img.png" alt="">
          </div>
        </div>
        <div class="btn-box">
          <a href="">
            <span>
              Ko'proq ko'rish
            </span>
            <img src="assets/images/color-arrow.png" alt="">
          </a>
        </div>
      </div>
    </section>
    </div>
    @foreach($massiv1 as $mas) 
    <section class="about_section layout_padding ">
      <div class="container  ">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  {{$mas->title}}
                </h2>
              </div>
              <p>
              {{$mas->text}} </p>
              <a href="#">
                <span>
                 Ko'proq
                </span>
                <img src="assets/images/{{$mas->img}}" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="assets/images/{{$mas->img}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    
    <!-- end about section -->


    <!-- info section -->
    

    <!-- end info_section -->

  

  @endsection