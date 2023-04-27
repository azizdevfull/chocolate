@extends('layout.main')

@section('content')

    <!-- chocolate section -->
    
    <section class="chocolate_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Bizning shokolad turlarimiza
          </h2>
          <p>
          Shokolad yurak-qon tomir faoliyatiga ijobiy ta'sir ko‘rsatadi, uning tarkibidagi glyukoza esa aqliy va jismoniy faoliyatni yaxshilaydi. 
          </p>
        </div>
      </div>
      
      <div class="container">
        <div class="chocolate_container">
        @foreach($massiv2 as $mas2) 
          <div class="box">
            <div class="img-box">
              <img src="assets/images/{{$mas2->img}}" alt="">
            </div>
            <div class="detail-box">
              <h6>
              {{$mas2->name}} <span>chocolato</span>
              </h6>
              <h5>
              ${{$mas2->cost}}
              </h5>
              <a href="">
                HOZR SOTIB OLING
              </a>
            </div>
          </div>
          @endforeach
      </div>
     
      </div>
    </section>
   
    <!-- end chocolate section -->

    <!-- info section -->
    

    <!-- end info_section -->

  </div>

@endsection