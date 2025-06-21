@extends('frontend.master')
@section('container')
    <x-content :name="'Instructor Profile'"
        paragraph="Gym and fitness refer to physical activities aimed at improving health, strength, and endurance." />

    <section class="profile-section">
        <div class="container6">
            <h5>Name:  {{ $instructor->name }} </h5> <h5>Contact:  {{ $instructor->contact_number }} </h5>
            <h5>Post: {{ $instructor->post }}</h5>

            <div class="profile-row">
                <div class="profile-img">
                    <img src="{{ $instructor->image }}" alt="Trainer Image">
                </div>
                <div class="profile-content">
                    <h2>Biography</h2>
                    <p>{{ $instructor->biography }}</p>

                    <h2>Achievement</h2>
                    <ul class="achievements">
                        {{ $instructor->achievement }}
                    </ul>


                </div>
            </div>

            {{-- New row for Skills and Contact Form --}}
          <div class="row mt-5 align-items-start">
    {{-- Professional Skills --}}
    <div class="col-md-6">
        <div class="section-box p-3">
            <h3 class="section-title mb-3">Professional Skills</h3>

            <p>Bodybuilding Training <span class="float-end">95%</span></p>
            <div class="progress mb-2">
                <div class="progress-bar" style="width:95%"></div>
            </div>

            <p>Cardio Training <span class="float-end">80%</span></p>
            <div class="progress mb-2">
                <div class="progress-bar" style="width:80%"></div>
            </div>

            <p>Fitness Training <span class="float-end">90%</span></p>
            <div class="progress mb-2">
                <div class="progress-bar" style="width:90%"></div>
            </div>

            <p>Aerobics Training <span class="float-end">65%</span></p>
            <div class="progress mb-2">
                <div class="progress-bar" style="width:65%"></div>
            </div>
        </div>
    </div>

    {{-- Send Message Form --}}
    <div class="col-md-6">
        <div class="section-box p-3">
            <h3 class="section-title mb-3">Send Message</h3>
            <p>
                If you need any information, feel free to send me a message. I will try to answer your questions and give
                you proper tips.
            </p>
            <form>
                <div class="input-group mb-2">
                    <input type="text" class="form-control me-2" placeholder="Name" name="name" required>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="mb-2">
                    <textarea class="form-control" placeholder="Write message here" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
            </form>
        </div>
    </div>
</div>

    </section>
@endsection
