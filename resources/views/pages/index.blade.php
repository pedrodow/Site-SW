@extends('template.index')

@section('contents')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">A STAR WARS FAN PAGE</h2>
                <p class="animate__animated animate__fadeInUp">For more news visit Lucasfilm web site.</p>
                <div>
                  <a href="https://www.lucasfilm.com/" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Ahsoka new Star Wars series</h2>
                <p class="animate__animated animate__fadeInUp">Watch now at Disney +</p>
                <div>
                  <a href="https://www.disneyplus.com/pt-br/series/ahsoka/pdpjs2TO4zJ4" class="btn-get-started animate__animated animate__fadeInUp scrollto">WATCH NOW</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">The Mandalorian may not have a new season?!?!</h2>
                <p class="animate__animated animate__fadeInUp">What's next for The Mandalorian after Season 3?</p>
                <div>
                  <a href="https://canaltech.com.br/series/the-mandalorian-qual-o-futuro-de-star-wars-depois-da-temporada-3-247248/" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->



 
@endsection