<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #161616; /* Orqa fon qora */
      font-family: Arial, sans-serif;
    }
    .container {
      background-color: #fff; /* Forma fon rangi */
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .form-header {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      font-weight: bold;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      outline: none;
      transition: border-color 0.3s;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007BFF; /* Fokusda ko'rsatiladigan rang */
    }
    button {
      width: 100%;
      padding: 0.5rem;
      background-color: #007BFF; /* Tugma rangi */
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    button:hover {
      background-color: #0056b3; /* Hover effekti */
    }
    .link {
      display: block;
      text-align: center;
      margin-top: 1rem;
      color: #007BFF;
      text-decoration: none;
    }
    .link:hover {
      text-decoration: underline;
    }
    .hidden {
      display: none;
    }
  </style>
</head>
<body>

  <!-- Login form -->
  <div class="container" id="loginFormContainer">
    <h2 class="form-header">Login</h2>
    <form id="loginForm" action="{{route('loginpost')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="loginEmail">Email</label>
        <input type="email" name="email" id="loginEmail" placeholder="your.email@example.com" required>
      </div>
      <div class="form-group">
        <label for="loginPassword">Parol</label>
        <input type="password" name="password" id="loginPassword" placeholder="********" required>
      </div>
      <button type="submit">Kirish</button>
    </form>
    <a href="{{route('register')}}" class="link" id="showRegister">Ro'yxatdan o'ting</a>
  </div>
  <script>
    // JavaScript for form switching
    document.getElementById('showRegister').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('loginFormContainer').classList.add('hidden');
      document.getElementById('registerFormContainer').classList.remove('hidden');
    });

    document.getElementById('showLogin').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('registerFormContainer').classList.add('hidden');
      document.getElementById('loginFormContainer').classList.remove('hidden');
    });

    // JavaScript for form validation (optional)
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Kirish muvaffaqiyatli!');
      // Here, you could add AJAX to send data to server or other logic
    });

    document.getElementById('registerForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const name = document.getElementById('registerName').value;
      const email = document.getElementById('registerEmail').value;
      const password = document.getElementById('registerPassword').value;
      const confirmPassword = document.getElementById('confirmPassword').value;

      if (password === confirmPassword) {
        alert('Ro\'yxatdan o\'tish muvaffaqiyatli!');
        // Here, you could add AJAX to send data to server or other logic
      } else {
        alert('Parollar mos kelmaydi.');
      }
    });
  </script>

</body>
</html>
