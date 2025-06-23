@extends('frontend.master')
@section('container')
@include('frontend.header')

<x-exercise-component :exercises="$exercises" />

<style>
  .testimonial-section {
    text-align: center;
    padding: 40px 20px;
  }

  .carousel-container {
    width: 100%;
    max-width: 800px;
    margin: auto;
    overflow: hidden;
    position: relative;
  }

  .carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
  }

  .testimonial-box {
    flex: 0 0 100%;
    box-sizing: border-box;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  }

  .profile-img1 {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 15px;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  .stars {
    color: #ffc107;
    font-size: 18px;
  }

  .testimonial-text {
    font-style: italic;
    font-size: 16px;
    color: #555;
    margin: 15px 0;
  }

  .author {
    font-weight: bold;
    color: #333;
  }
</style>

<div class="testimonial-section">
  <p class="category">GYMMASTER REVIEWS - GYMS</p>
  <h2 class="main-heading">See what nearby gyms have to say</h2>
  <p class="sub-heading">Recent GymMaster reviews</p>

  <div class="carousel-container">
    <div class="carousel-track" id="carousel-track">
      @php
        $testimonials = [
          ['img' => 1, 'name' => 'Rachel', 'country' => 'NZ', 'text' => 'Best user-friendly gym software...'],
          ['img' => 2, 'name' => 'Jordan', 'country' => 'Canada', 'text' => 'Helped reduce staffing costs...'],
          ['img' => 3, 'name' => 'Alicia', 'country' => 'Australia', 'text' => 'Easy to use, clean interface...'],
          ['img' => 4, 'name' => 'David', 'country' => 'Ireland', 'text' => 'Great for 24/7 gym access...'],
          ['img' => 5, 'name' => 'Linda', 'country' => 'USA', 'text' => 'Easy billing, reports, tools...'],
          ['img' => 6, 'name' => 'Sergio', 'country' => 'Spain', 'text' => 'Online booking saved time...'],
        ];
      @endphp

      @foreach($testimonials as $t)
        <div class="testimonial-box">
          <img src="https://i.pravatar.cc/100?img={{ $t['img'] }}" alt="{{ $t['name'] }}" class="profile-img1">
          <div class="stars">★★★★★</div>
          <p class="testimonial-text">“{{ $t['text'] }}”</p>
          <p class="author">{{ $t['name'] }} | {{ $t['country'] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</div>

<script>
  const track = document.getElementById("carousel-track");
  const slides = document.querySelectorAll(".testimonial-box");
  let index = 0;

  function slideCarousel() {
    index++;
    if (index >= slides.length) {
      index = 0;
    }
    track.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(slideCarousel, 4000);
</script>

@endsection
