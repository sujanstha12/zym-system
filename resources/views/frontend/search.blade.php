@extends('frontend.master')
@section('container')

    <div class="container" style="margin-top: 200px;">
        @if (isset($message))
            <p>{{ $message }}</p>
        @else
            <div>
                <p>Found{{ $resultsCount }}</p>
            </div>
            @foreach ($results as $result)
                <div class="product-section">
                    <div class="product-image">
                        <img src="{{ $result->image }}" alt="{{ $result->title ?? $result->name }}">
                    </div>
                    <div class="product-details">
                        <h1>{{ $result->title ?? $result->name }}</h1>

                        <p class="description">
                            Hand Dumble is very professional and expert trainer. In his job. He never compromise about his
                            work
                            to maintain our sed cuuntur magni dolores eos qui rat ione volupta
                        </p>

                    </div>

                </div>
            @endforeach
        @endif

    </div>
@endsection
