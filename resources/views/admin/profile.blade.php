@extends('admin.layout.master')
@section('container')
    <style>
        .profilecard {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profilecard img {
            border: 5px solid #e0e0e0;
            margin-top: -80px;
            background: #fff;
        }

        .profileform {
            margin-top: 30px;
            text-align: left;
            padding: 20px 50px;
        }

        .profileform label {
            font-weight: 600;
            color: #333;
        }

        .profileform input[type="text"],
        .profileform input[type="email"],
        .profileform input[type="file"],
        .profileform input[type="string"],
        .profileform input[type="numeric"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .profileform input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 10px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #0056b3, #003f7f);
        }

        h2 {
            color: #2c3e50;
            font-weight: bold;
        }

        .text-muted {
            color: #7f8c8d !important;
        }
    </style>

    <div class="container mt-5">
        <div class="card text-justify p-5 profilecard position-relative">
            <!-- Profile Image -->
            <img src="{{ $user->image }}" class="rounded-circle mx-auto" width="150" alt="Profile Picture">

            <!-- User Name -->
            <h2 class="mt-3">{{ Auth::user()->name }}</h2>

            <!-- User Bio -->
            <p class="text-muted mt-5">Web Developer | Tech Enthusiast | Blogger</p>

            <!-- Profile Details -->
            <div class="profileform">
                <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image">

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="{{ $user->address }}" required>

                    <label for="phone_number">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ $user->phone_number }}">

                    <button class="btn btn-primary mt-3" type="submit">Edit Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection
