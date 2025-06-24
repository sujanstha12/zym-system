@extends('frontend.master')
@section('container')
@include('frontend.header')

<x-exercise-component :exercises="$exercises" />

<style>
 .testimonial-section {
  text-align: center;
  padding: 40px 20px;
  font-family: Arial, sans-serif;
}

.carousel-container {
  margin: 30px auto;
  overflow-x: hidden;
  position: relative;
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease-in-out;
  padding-left: 10px;
}

.testimonial-box {
  flex: 0 0 33.33%;
  box-sizing: border-box;
  padding: 20px;
  background-color: #e3f2fd; /* Light Blue */
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  margin: 0 10px;
  transition: transform 0.3s ease;
}

.profile-img1 {
  width: 80px;
  height: 80px;
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
  font-size: 15px;
  line-height: 1.5;
  color: #444;
  margin: 15px 0;
  min-height: 80px;
}


.author {
  font-weight: bold;
  color: #333;
  font-size: 14px;
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
    [
      'img' => 1,
      'name' => 'Rachel',
      'country' => 'NZ',
      'text' => 'Best user-friendly gym software I have used. It simplifies membership management and helps our staff stay organized. Highly recommend it to gym owners!'
    ],
    [
      'img' => 2,
      'name' => 'Jordan',
      'country' => 'Canada',
      'text' => 'Helped reduce staffing costs significantly while improving member engagement. The booking system is intuitive and reliable.'
    ],
    [
      'img' => 3,
      'name' => 'Alicia',
      'country' => 'Australia',
      'text' => 'Easy to use, clean interface, and great customer support. It has improved our billing and class scheduling processes.'
    ],
    [
      'img' => 4,
      'name' => 'David',
      'country' => 'Ireland',
      'text' => 'Great for 24/7 gym access management and tracking attendance. Our members love the mobile app integration.'
    ],
    [
      'img' => 5,
      'name' => 'Linda',
      'country' => 'USA',
      'text' => 'Easy billing, detailed reports, and helpful tools that keep our gym running smoothly and efficiently every day.'
    ],
    [
      'img' => 6,
      'name' => 'Sergio',
      'country' => 'Spain',
      'text' => 'Online booking saved us time and reduced errors. The system is very flexible and customizable to our needs.'
    ],
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
const totalSlides = slides.length;
const visibleSlides = 3;

function slideCarousel() {
  index++;
  if (index > totalSlides - visibleSlides) {
    index = 0;
  }
  track.style.transform = `translateX(-${index * (100 / visibleSlides)}%)`;
}

setInterval(slideCarousel, 4000);

</script>

@endsection
