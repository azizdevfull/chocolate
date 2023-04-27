@extends('layout.main')

@section('content')

    <!-- client section -->
    
    <section class="client_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <div class="img-box sub_img-box">
              <img src="assets/images/client-chocolate.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 px-0">
            <div class="client_container">
              <div class="heading_container">
                <h2>
                  Izohlar
                </h2>
              </div>
             
              <div id="customCarousel2" class="carousel slide" data-ride="carousel">
              @foreach($massiv3 as $mas3) 
                <div class="carousel-inner ">
                 <div class="carousel-item ">
                    <div class="box">
                      <div class="img-box">
                        <img src="assets/images/{{$mas3->img}}" alt="">
                      </div>
                      <div class="detail-box">
                        <h4>
                          {{$mas3->name}}
                        </h4>
                        <p>
                          {{$mas3->text}}
                        </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  @endforeach 
                 
                  
                  <div class="carousel-item active">
                    <div class="box">
                      <div class="img-box">
                        <img src="assets/images/{{$mas3->img}}" alt="">
                      </div>
                      <div class="detail-box">
                        <h4>
                        {{$mas3->name}} 
                        </h4>
                        <p>
                        {{$mas3->text}}
                      </p>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="carousel_btn-box">
                  <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Oldingisi</span>
                  </a>
                  <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Keyengisi</span>
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- end client section -->

    <!-- info section -->
    

    <!-- end info_section -->

  </div>

 @endsection