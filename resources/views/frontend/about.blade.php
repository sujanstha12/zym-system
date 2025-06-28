@extends('frontend.master')
@section('container')
    <x-content : name="ABOUT US"
        paragraph="Gym and fitness refer to physical activities aimed at improving health, strength, and endurance." />

    <div class="container">
        <div class="row">
            <section class="hero">
                <div class="text-content">
                    <h1> BEST <span class="highlight"> GYM STATION </span> FOR YOU BECAUSE <BR> WE PROVIDE <span
                            class="highlight">BEST</span> QUALITY OF <span class="highlight">EQUIPMENTS</span><br>
                        AS WELL AS <span class="highlight">INSTRACTORS</span>
                    </h1>
                    <p>"Going to the gym is very important for maintaining our health. Many people avoid it due to
                        discomfort or effort, but when we pursue pleasure rationally, we understand that the benefits far
                        outweigh the temporary difficulties."</p>
                    <ul class="features">
                        <li><input type="checkbox" disabled /> Builds Aerobic Power</li>
                        <li><input type="checkbox" disabled /> Strong body Structure</li>
                        <li><input type="checkbox" disabled /> Boots your Memory</li>
                        <li><input type="checkbox" disabled /> Brng about resultful Sleep</li>
                    </ul>
                    <div class="buttons">
                         <a href="https://www.youtube.com/watch?v=EKUNGQ4LmH8" target="_blank" rel="noopener noreferrer">
                        <button class="start-btn">LET'S START</button>
                         </a>
                        <a href="https://www.youtube.com/watch?v=4pKly2JojMw" target="_blank" rel="noopener noreferrer">
                            <button class="video-btn">▶ INTRO VIDEO</button>
                        </a>

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
                    <img src="https://th.bing.com/th/id/OIP.a4PhqzNqJNVBuBXjad_lTgHaHa?w=199&h=199&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Dumbbell Icon">
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
            <h1> THREE PACKAGE<span class="highlight"> MEMBERSHIP </span> INFORMATION </h1>
            <div class="card-container mt-5">
                <!-- Basic Plan -->
                <div class="card">
                    <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/pricing1.png" alt="Basic Plan">
                    <h3>BASIC</h3>

                    <ul>
                        <li>6 hour access to the gym.</li>
                        <li>5 Instrument to use.</li>
                        <li>3 class per week</li>
                        <li>One month membership</li>
                        <li>Free drinking package</li>
                        <li>One personal instructor</li>
                    </ul>

                </div>

                <!-- Silver Plan -->
                <div class="card">
                    <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/pricing2.png" alt="Silver Plan">
                    <h3>SILVER</h3>

                    <ul>
                        <li>Unlimited access to the gym.</li>
                        <li>20 Instrument to use.</li>
                        <li>5 class per week</li>
                        <li>Six month membership</li>
                        <li>Free drinking package</li>
                        <li>Two personal instructor</li>
                    </ul>

                </div>

                <!-- Gold Plan -->
                <div class="card">
                    <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/pricing3.png" alt="Gold Plan">
                    <h3>GOLD</h3>

                    <ul>
                        <li>Unlimited access to the gym.</li>
                        <li>All Instrument to use.</li>
                        <li>7 class per week</li>
                        <li>One year membership</li>
                        <li>Free drinking package</li>
                        <li>Five personal instructor</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

    <!-- BMI calculator -->
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center"
        style="background: url('{{ asset('images/bmi-bg.jpg') }}') no-repeat center center / cover;">



        <div class="card shadow-lg p-4 rounded-4"
            style="max-width: 500px; width: 100%; background-color: rgba(255, 255, 255, 0.95);">

            <div class="card-body">
                <h2 class="card-title text-center text-primary mb-3">BMI Calculator</h2>
                <p class="text-center text-muted small mb-4">
                    BMI is a reliable guide to estimate the healthy weight range based on height, weight, and age.
                </p>

                <form action="{{ route('bmi.calculate') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control" required
                            placeholder="Enter your age">
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Gender</label>
                        <div class="btn-group w-100" role="group" aria-label="Gender selection">
                            <input type="radio" class="btn-check" name="gender" id="gender-male" value="male"
                                autocomplete="off" required>
                            <label class="btn btn-outline-primary w-50" for="gender-male">Male</label>

                            <input type="radio" class="btn-check" name="gender" id="gender-female" value="female"
                                autocomplete="off" required>
                            <label class="btn btn-outline-danger w-50" for="gender-female">Female</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (kg)</label>
                        <input type="number" name="weight" id="weight" class="form-control" required
                            placeholder="Enter your weight">
                    </div>

                    <div class="mb-3">
                        <label for="height" class="form-label">Height (cm)</label>
                        <input type="number" name="height" id="height" class="form-control" required
                            placeholder="Enter your height">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Calculate BMI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <x-exercise-component :exercises="$exercises" />
@endsection
