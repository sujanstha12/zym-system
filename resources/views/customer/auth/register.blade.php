<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Customer Registration</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: linear-gradient(135deg, #667eea, #764ba2);
      font-family: 'Poppins', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }

    .container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
      width: 360px;
      max-width: 90vw;
      text-align: center;
    }

    h2 {
      margin-bottom: 25px;
      font-weight: 600;
      color: #4b3ca7;
      letter-spacing: 1px;
      font-size: 1.8rem;
    }

    .alert {
      background-color: #ffdddd;
      border-left: 6px solid #f44336;
      padding: 10px 15px;
      margin-bottom: 20px;
      text-align: left;
      border-radius: 6px;
      font-size: 0.9rem;
      color: #a94442;
    }

    .alert ul {
      margin: 0;
      padding-left: 20px;
    }

    .form-group {
      margin-bottom: 18px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 0.95rem;
      color: #555;
      user-select: none;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="file"] {
      width: 100%;
      padding: 12px 15px;
      border-radius: 8px;
      border: 1.8px solid #ddd;
      font-size: 1rem;
      transition: border-color 0.3s ease;
      outline-offset: 2px;
      outline-color: transparent;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    input[type="file"]:focus {
      border-color: #667eea;
      outline-color: #667eea;
    }

    button.submit-btn {
      width: 100%;
      padding: 14px 0;
      background: #667eea;
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: 700;
      color: white;
      cursor: pointer;
      letter-spacing: 1px;
      box-shadow: 0 6px 12px rgba(102, 126, 234, 0.6);
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    button.submit-btn:hover {
      background: #4b3ca7;
      box-shadow: 0 8px 15px rgba(75, 60, 167, 0.75);
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>

    @if ($errors->any())
    <div class="alert">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('customer.register') }}" method="POST" enctype="multipart/form-data" novalidate>
      @csrf
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your full name" required />
      </div>
      <div class="form-group">
        <label for="image">Profile Image</label>
        <input type="file" id="image" name="image" accept="image/*" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required />
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input
          type="password"
          id="password_confirmation"
          name="password_confirmation"
          placeholder="Confirm your password"
          required
          autocomplete="new-password"
        />
      </div>

      <button type="submit" class="submit-btn">Register</button>
    </form>
  </div>
</body>
</html>
