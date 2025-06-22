@extends('frontend.master')
@section('container')
@include('frontend.header')

<x-exercise-component :exercises="$exercises" />

 <div class="testimonial-section">
    <p class="category">GYMMASTER REVIEWS - GYMS</p>
    <h2 class="main-heading">See what nearby gyms have to say</h2>
    <p class="sub-heading">Recent GymMaster reviews</p>

    <div class="carousel-container">
      <div class="carousel-track" id="carousel-track">
        <!-- 6 Testimonials -->
        <div class="testimonial-box">
            <img src="https://i.pravatar.cc/100?img=1" alt="Rachel" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“Best user-friendly gym software I’ve used.   “We have been in business for 10 years now and with your gym software system we just installed in November 2016
          we will be able to compete with the bigger franchises that are all open 24/7. Plus we can reduce the cost
          of staffing as that is one of our huge costs as the facility had to have an attendant at all hours.”</p>
          <p class="author"><strong>Rachel | NZ</strong></p>
        </div>
        <div class="testimonial-box">
            <img src="https://i.pravatar.cc/100?img=2" alt="Jordan" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“Helped reduce staffing costs with automation.  “GymMaster has been the most user friendly software I have ever used! The layout and style is attractive,
          the customer support outstanding and I have never had any issue with the hardware.
          Would highly recommend GymMaster to anyone looking to upgrade!”</p>
          <p class="author"><strong>Jordan | Canada</strong></p>
        </div>
        <div class="testimonial-box">
            <img src="https://i.pravatar.cc/100?img=3" alt="Alicia" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“Easy to use, clean interface, top support.  “GymMaster has been the most user-friendly software I have ever used! The layout and style are attractive,
          and the customer support is outstanding.”  “GymMaster has been the most user-friendly software I have ever used! The layout and style are attractive,
          and the customer support is outstanding.”</p>
          <p class="author"><strong>Alicia | Australia</strong></p>
        </div>
        <div class="testimonial-box">
              <img src="https://i.pravatar.cc/100?img=4" alt="David" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“Great for 24/7 gym access and management.  “We have been in business for 10 years now and with your gym software system we just installed in November 2016
          we will be able to compete with the bigger franchises that are all open 24/7. Plus we can reduce the cost
          of staffing as that is one of our huge costs as the facility had to have an attendant at all hours.”</p>
          <p class="author"><strong>David | Ireland</strong></p>
        </div>
        <div class="testimonial-box">
             <img src="https://i.pravatar.cc/100?img=5" alt="Linda" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“Easy billing, reports, and member tools.  “GymMaster has been the most user friendly software I have ever used! The layout and style is attractive,
          the customer support outstanding and I have never had any issue with the hardware.
          Would highly recommend GymMaster to anyone looking to upgrade!””</p>
          <p class="author"><strong>Linda | USA</strong></p>
        </div>
        <div class="testimonial-box">
              <img src="https://i.pravatar.cc/100?img=6" alt="Sergio" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“Online booking saved us a lot of time.  “GymMaster has been the most user-friendly software I have ever used! The layout and style are attractive,
          and the customer support is outstanding. “GymMaster has been the most user-friendly software I have ever used! The layout and style are attractive,
          and the customer support is outstanding.”</p>
          <p class="author"><strong>Sergio | Spain</strong></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    const track = document.getElementById("carousel-track");
    const slideCount = document.querySelectorAll(".testimonial-box").length;
    let index = 0;
    const visibleSlides = 3;

    function slideCarousel() {
      index++;
      if (index > slideCount - visibleSlides) {
        index = 0;
      }
      track.style.transform = `translateX(-${index * (100 / visibleSlides)}%)`;
    }

    setInterval(slideCarousel, 4000);
  </script>

@endsection
