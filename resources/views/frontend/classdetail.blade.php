@extends('frontend.master')
@section('container')
    <x-content : name="{{ $ourclass->title }}" : image="{{ $ourclass->image }}"
        paragraph="{{ $ourclass->header_description }}" />

    <div class="container1">
        <!-- Main Image Section -->
        <div class="main">
            <h1>{{ $ourclass->title }}</h1>
            <p class="text-dark">{!! $ourclass->description !!}</p>

        </div>

    </div>
    <div class="container1">
        <!-- Main Image Section -->
        <section class="class-schedule">
            <h1><span class="highlight"> Class schedule</span></h1>
            <p>Gym is very important to maintain our health luptas sit fugit, sed quia cuuntur magni dolores eos qui rat
                ione
                voluptas pleasure rationally encounter consequences that are extremely pleasure rationally encounter</p>

            <table>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Time</th>
                        <th>Instructor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ourclass->classSchedules as $classSchedule)
                        <tr>
                            <td>{{ $classSchedule->day }}</td>
                           <td>{{ $classSchedule->start_time->format('g:i A') }} to {{ $classSchedule->end_time->format('g:i A') }}</td>

                            <td>{{ $classSchedule->instructor->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Sidebar -->
        <div class="sidebar">

            <h3>CATEGORIES</h3>
            <ul class="category-list">
                @foreach ($ourclasses as $ourclass)
                    <li><span>{{ $ourclass->title }}</span> <a href="{{ route('ourclassDetail', $ourclass) }}">View</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>

    <!--exercise card-->

    <div class="container2 p-4">
        <h1 class="text-center">Including Exercises</h1>
        <!-- Card 1 -->
        @if ($exercises->isNotEmpty())
            @foreach ($exercises as $exercise)
                <div class="card">
                    <img src="{{ $exercise->image }}" alt="Card image" class="card-img">
                    <div class="card-body">
                        <h5 class="card-title">{{ $exercise->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No exercises available.</p>
        @endif


    </div>



@endsection
