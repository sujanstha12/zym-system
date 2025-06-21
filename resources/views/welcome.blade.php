@extends('frontend.master')
@section('container')
@include('frontend.header')

<x-exercise-component :exercises="$exercises" />
@endsection
