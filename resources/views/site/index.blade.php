@extends('layouts.site')

@section('stylesheet')


@endsection

@section('content')




<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Better Solutions For A Beautiful Earth </h1>
                <h2>We are team of sea waves designers & developer.</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('assets/frontend/img/hero-img.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
        <div class="container">

            <div class="row" data-aos="zoom-in">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/frontend/img/clients/client-1.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/frontend/img/clients/client-2.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/frontend/img/clients/client-3.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/frontend/img/clients/client-4.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/frontend/img/clients/client-5.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/frontend/img/clients/client-6.png')}}" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        {{-- <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div> --}}

        <div class="p-4 mx-auto">
            <div class="text-center">
            <h1>Global Sea Level Rise</h1>
            <p>Data source: Satellite sea level observations.</p>
            <p>Credit: NASA's Goddard Space Flight Center</p>
            <p>RISE SINCE 1994 101.4millimeters</p>
        </div>
            <div class="d-flex align-items-center">
                <span>Sea Height Variation (mm)</span>
        <canvas id="myChart" height="100px"></canvas>
            </div>

        </div>


    </section><!-- End About Us Section -->




@endsection
@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
>>>>>>> 21c06b3a43d26746d879602646adf52094f7066c
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
<<<<<<< HEAD

      var labels =  {{ Js::from($year)}};
      var sea_level = {{ Js::from($sea_level)}};

      let arr1=[];
      let arr2=[];

      console.log(labels)
      for (const iterator of labels) {
        arr1.push(iterator.year)

        }
        console.log(arr1)
=======

      var labels =  [2020,2022, 2023,2024, 2025];
      var users = [0, 6,3,3,7,10 ];

>>>>>>> 21c06b3a43d26746d879602646adf52094f7066c
      const data = {
        labels: arr1,
        datasets: [{
          label: 'Sea Level',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: sea_level,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

<<<<<<< HEAD




</script>
=======
</script> --}}
@endsection
