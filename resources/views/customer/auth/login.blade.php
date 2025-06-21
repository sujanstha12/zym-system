<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 320px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            font-weight: bold;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-weight: bold;
            font-size: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn-login {
            background-color: #007bff;
            color: white;
            margin-top: 10px;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .btn-home {
            background-color: #6c757d;
            color: white;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .btn-home:hover {
            background-color: #5a6268;
        }

        .forgot-password {
            display: block;
            text-align: right;
            font-size: 13px;
            margin-top: -10px;
            margin-bottom: 15px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .alert {
            background-color: #ffe5e5;
            color: #cc0000;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-size: 13px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .alert li {
            list-style: disc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Customer Login</h2>

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('customer.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="forgot-password">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>

        <a href="{{ route('welcome') }}" class="btn btn-home">← Back to Home</a>
    </div>
</body>

</html>
