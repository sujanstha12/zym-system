@extends('frontend.master')
@section('container')
<x-content : name="ABOUT US" paragraph="Gym and fitness refer to physical activities aimed at improving health, strength, and endurance."/>

<div class="container">
    <div class="row">

        <section class="hero">
            <div class="text-content">
             <h1> BEST <span class="highlight"> GYM STATION </span> FOR YOU BECAUSE <BR> WE PROVIDE <span class="highlight">BEST</span> QUALITY OF <span class="highlight">EQUIPMENTS</span><br>
                AS WELL AS <span class="highlight">INSTRACTORS</span>
              </h1>
              <p>"Going to the gym is very important for maintaining our health. Many people avoid it due to discomfort or effort, but when we pursue pleasure rationally, we understand that the benefits far outweigh the temporary difficulties."</p>
              <ul class="features">
                <li><input type="checkbox" disabled /> Builds Aerobic Power</li>
                <li><input type="checkbox" disabled /> Strong body Structure</li>
                <li><input type="checkbox" disabled /> Boots your Memory</li>
                <li><input type="checkbox" disabled /> Brng about resultful Sleep</li>
              </ul>
              <div class="buttons">
                <button class="start-btn">LET'S START</button>
                <button class="video-btn">▶ INTRO VIDEO</button>
              </div>
            </div>
            <div class="image-content">
              <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/about/2.png" alt="Fitness models" />
            </div>
          </section>
        </div>


          <section class="features-section">
            <div class="features-left">
              <div class="feature-box">
                <img src="https://th.bing.com/th/id/OIP.a4PhqzNqJNVBuBXjad_lTgHaHa?w=199&h=199&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Dumbbell Icon">
                <div>
                  <h3>Best Training</h3>
                  <p>Best training programs with expert-designed workouts to level up your fitness.</p>
                </div>
              </div>

              <div class="feature-box">
                <img src="https://cdn-icons-png.flaticon.com/128/814/814513.png" alt="Instructor Icon">
                <div>
                  <h3>Qualified Instructor</h3>
                  <p>Certified professionals guiding you with safety, skill, and motivation.</p>
                </div>
              </div>

              <div class="feature-box">
                <img src="https://cdn-icons-png.flaticon.com/128/10445/10445540.png" alt="Equipment Icon">
                <div>
                  <h3>Latest Equipment</h3>
                  <p>Top-notch gym machines and tools to maximize your training efficiency.</p>
                </div>
              </div>

              <div class="feature-box">
                <img src="https://cdn-icons-png.flaticon.com/128/1828/1828884.png" alt="Trophy Icon">
                <div>
                  <h3>Award Winners</h3>
                  <p>Recognized for excellence in fitness and innovation across the region.</p>
                </div>
              </div>
            </div>

            <div class="features-right">
              <div class="discount-badge">
                35% OFF
                <span>LIMITED TIME DISCOUNT</span>
              </div>
            </div>
        </section>

        <div class="container text-center mt-5 p-5">
             <h1> CHOOSE YOUR <span class="highlight"> MEMBERSHIP</span> </h1>
            <div class="card-container mt-5">
                <!-- Basic Plan -->
                <div class="card">
                  <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/pricing1.png" alt="Basic Plan">
                  <h3>BASIC</h3>
                  <p class="price">NPR 1500</p>
                  <span>per month</span>
                  <ul>
                    <li>6 hour access to the gym.</li>
                    <li>5 Instrument to use.</li>
                    <li>3 class per week</li>
                    <li>One month membership</li>
                    <li>Free drinking package</li>
                    <li>One personal instructor</li>
                  </ul>
                  <button>JOIN TODAY</button>
                </div>

                <!-- Silver Plan -->
                <div class="card">
                  <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/pricing2.png" alt="Silver Plan">
                  <h3>SILVER</h3>
                  <p class="price">NPR 2500</p>
                  <span>per month</span>
                  <ul>
                    <li>Unlimited access to the gym.</li>
                    <li>20 Instrument to use.</li>
                    <li>5 class per week</li>
                    <li>Six month membership</li>
                    <li>Free drinking package</li>
                    <li>Two personal instructor</li>
                  </ul>
                  <button>JOIN TODAY</button>
                </div>

                <!-- Gold Plan -->
                <div class="card">
                  <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/pricing3.png" alt="Gold Plan">
                  <h3>GOLD</h3>
                  <p class="price">NPR 5000</p>
                  <span>per month</span>
                  <ul>
                    <li>Unlimited access to the gym.</li>
                    <li>All Instrument to use.</li>
                    <li>7 class per week</li>
                    <li>One year membership</li>
                    <li>Free drinking package</li>
                    <li>Five personal instructor</li>
                  </ul>
                  <button>JOIN TODAY</button>
                </div>
              </div>
              </div>

              </div>
              </div>

              <x-exercise-component :exercises="$exercises" />




@endsection
