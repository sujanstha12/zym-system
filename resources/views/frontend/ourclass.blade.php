@extends('frontend.master')
@section('container')
 <x-content : name="OUR CLASSES"
        paragraph="A gym class is a structured fitness session designed to improve overall health and wellness. These classes are led by trained instructors and often focus on different aspects such as strength, endurance, flexibility, or cardio." />

    <div class="container">
        <div class="row">
            <section class="classes-section">
                <div class="text-content my-5 p-5">
                    <h6><span class="highlight">OUR CLASSES</span></h6>
                    <h1>
                        SPECIFIC <span class="highlight">CLASSES</span><br />
                        <span class="highlight">WHAT</span> YOU NEEDS
                    </h1>
                    <p class="description">
                        "Going to the gym is very important for maintaining our health. Many avoid it due to discomfort, but
                        the benefits greatly outweigh the temporary challenges."
                    </p>
                    <p class="description">
                        "Going to the gym is very important for maintaining our health. Many avoid it due to discomfort, but
                        the benefits greatly outweigh the temporary challenges."
                    </p>
                    <div class="video-button">
                        <div class="play-circle">
                            <div class="triangle"></div>
                        </div>
                        <span class="video-btn">▶VIDEO CLASS</span>
                    </div>
                </div>
                <div class="image-content">
                    <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/d1.jpg" alt="Gym Trainer" />
                </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center"><span class="highlight">CLASSES</span> WE PROVIDE</h1>
        <h5 class="text-center p-3"> We offer a variety of dynamic classes to help you reach your fitness goals, no matter
            your level! </h5>


    </div>

   <section class="class-cards pt-5">
        @foreach ($ourclasses->take(8) as $ourclass)

        <div class="card">
          <a href="{{ route('ourclassDetail',$ourclass) }}"> <img src="{{ $ourclass->image }}" alt="{{ $ourclass->title }}"></a>
            <div class="card-label">{{ $ourclass->title }}</div>
            <div class="card-footer">Duration {{ $ourclass->duration }}</div>
        </div>
        @endforeach

       </section>
    </div>
@endsection
