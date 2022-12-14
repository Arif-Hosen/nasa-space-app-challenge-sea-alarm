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
                    <a target="_blank" href=" https://sealevel.nasa.gov/vesl/web/sea-level/slr-uplift/" class="btn-get-started scrollto">Nasa Sea Level Change Simulation </a>
                    <a target="_blank" href="https://climate.nasa.gov/vital-signs/sea-level/" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Go to Nasa Site</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('assets/frontend/img/nasa/5.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


    <!-- ======= Cliens Section ======= -->
    {{-- <section id="cliens" class="cliens section-bg">
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
    </section> --}}
    <!-- End Cliens Section -->

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

        <div class="mx-auto p-5">
            <div class="text-center">
                <h1>Global Sea Level Rise</h1>
                <p>Data source: Satellite sea level observations.</p>
                <p>Credit: NASA's Goddard Space Flight Center</p>
                <p>RISE SINCE 1994 101.4millimeters</p>
            </div>
            <div style="width:85%" class="d-flex align-items-center justify-content-center mx-auto">
                <span >Sea Height Variation (mm)</span>
                <canvas id="myChart" height="100px"></canvas>
            </div>

        </div>


    </section><!-- End About Us Section -->

{{-- tree measurment --}}
    <section>
        <div class="text-center">
            <h1>Tree Measurement (%) of Your Area</h1>
            <p>Data source: Eath Explorar.</p>
            <p>Credit: Landsat program. NASA / USGS Joint Program</p>
        </div>

      <div class=" d-flex w-50 mx-auto mt-4">
       
           
                <select  id="area" class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example">
                    <option   selected>Open this select menu</option>
                    <option  value='cumilla'>Cumilla</option>
                    <option  value='noyakhali'>Noyakhali</option>
                    <option value='3'>Lakshmipur</option>
                  </select>
                  {{-- <button onclick="area()" class="btn btn-primary " type="button">Seach</button> --}}
           
    
      </div>
        <div id="cumilla" class="p-5">
           <div class="d-flex justify-content-between align-items-center">
                <div>
                    <img width="80%" src="{{asset('assets/frontend/img/nasa/forestfinal1.png')}}" alt="">
                </div>
            
                <div>
                    <p>The tree percentage of your area has <span style="color:crimson">decreased  5%</span> in the last year.</p>
                    <p class="text-primary">Please consider planting a tree!</p>
                </div>
            </div>
        </div>
        <div id="noyakhali" class="p-5 d-none">
           <div class="d-flex justify-content-between align-items-center">
                <div>
                    <img width="80%" src="{{asset('assets/frontend/img/nasa/forestfinal2.png')}}" alt="">
                </div>
            
                <div>
                    <p>The tree percentage of your area has <span style="color:crimson">decreased  10%</span> in the last year.</p>
                    <p class="text-primary">Please consider planting a tree!</p>
                </div>
            </div>
        </div>
    </section>
{{--end tree measurment --}}



    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section> --}}
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    {{-- <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section> --}}
    <!-- End Contact Section -->

</main><!-- End #main -->

@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

      var labels =  {{ Js::from($year)}};
      var sea_level = {{ Js::from($sea_level)}};

      let levelsArray=[];
      let seaLevelArray=[];

      
      for (const iterator of labels) {

        levelsArray.unshift(iterator.year)
        

        // arr1.push(iterator.year)


        }
        
      for (const iterator of sea_level) {
        seaLevelArray.unshift(iterator.sea_level)
        }
        console.log(seaLevelArray)

      var labels =  [2020,2022, 2023,2024, 2025];
      var users = [0, 6,3,3,7,10 ];

      const data = {
        labels: levelsArray,
        datasets: [{
          label: 'Sea Level',
          backgroundColor: 'crimson',
          borderColor: 'black',
          data: seaLevelArray,
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

      function area(){
       let areaSelect=  document.getElementById('area').value;
       console.log(areaSelect)
       let cumilla = document.getElementById('cumilla');
       let noyakhali = document.getElementById('noyakhali');

       if(areaSelect='cumilla'){
        console.log('from cumilla',areaSelect)


        cumilla.style.display='block';
        noyakhali.style.display='none';
       }
       else {
        console.log('from noyakhli',areaSelect)
        cumilla.style.display='none';
        noyakhali.style.display='block';
       }
      
       function myFunction() {
  var x = document.getElementById("mySelect").value;
  console.log(x);
  document.getElementById("demo").innerHTML = x;
}

      }

</script>

@endsection
