@extends('frontend.master')

@section('container')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="card shadow-lg p-4 rounded-4" style="max-width: 500px; width: 100%; background-color: #fdfefe;">
        <div class="card-body text-center">
            <h2 class="card-title mb-4 text-primary">Your BMI Result</h2>

            <p class="fs-4">
                <strong>BMI:</strong>
                <span class="badge bg-info text-dark">{{ number_format($bmi, 2) }}</span>
            </p>

            <p class="fs-5">
                <strong>Category:</strong>
                <span class="badge
                    @if($category === 'Underweight') bg-warning
                    @elseif($category === 'Normal weight') bg-success
                    @elseif($category === 'Overweight') bg-primary
                    @else bg-danger
                    @endif">
                    {{ $category }}
                </span>
            </p>

            <a href="{{ route('bmi.calculate') }}" class="btn btn-outline-primary mt-4 px-4">Try Again</a>
        </div>
    </div>
</div>
@endsection
