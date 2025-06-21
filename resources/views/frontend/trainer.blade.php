@extends('frontend.master')
@section('container')
    <x-content : name="OUR INSTRUCTORS "
        paragraph="Gym and fitness refer to physical activities aimed at improving health, strength, and endurance." />

    <div class="container pt-5">
        <div class="row">

            <div class="cards-wrapper">
                @foreach ($instructors->take(8) as $instructor)
                    <div class="card-container3">
                        <div class="trainer-card">
                            <img src="{{ $instructor->image }}" alt="Trainer Photo" />
                            <h3>{{ $instructor->name }}</h3>
                            <p>{{ $instructor->post }}</p>

                            <div class="trainer-contact-info">
                                <p><i class="fas fa-envelope"></i> <a
                                        href="mailto:{{ $instructor->email }}">{{ $instructor->email }}</a></p>
                            </div>

                            <div class="trainer-social-icons">
                                @if ($instructor->facebook_url)
                                    <a href="{{ $instructor->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if ($instructor->twitter_url)
                                    <a href="{{ $instructor->twitter_url }}"><i class="fab fa-twitter"></i></a>
                                @endif
                            </div>

                            <a href="{{route('trainerdetails',$instructor)}}" class="trainer-view-profile">View Profile</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
    </div>

@endsection
