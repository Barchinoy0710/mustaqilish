<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ro'yhatdan o'tish</title>
  <style>
     body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #161616; 
      font-family: Arial, sans-serif;
    }
    .container {
      background-color: #fff; 
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
      border-color: #007BFF; /* Fokusda ko'rsatiladigan rang*/
    }
    button {
      width: 100%;
      padding: 0.5rem;
      background-color: #007BFF; /*Tugma rangi */
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
  </style> 
</head>
<body>
  <!-- Register form -->
  <div class="container hidden" id="registerFormContainer">
    <h2 class="form-header">Ro'yxatdan o'tish</h2>
    <form id="registerForm" action="{{route('registration')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="registerName">Ismingiz</label>
        <input name="name" type="text" id="registerName" placeholder="Ismingizni kiriting" required>
      </div>
      <div class="form-group">
        <label for="registerEmail">Email</label>
        <input name="email" type="email" id="registerEmail" placeholder="your.email@example.com" required>
      </div>
      <div class="form-group">
        <label for="registerPassword">Parol</label>
        <input name="password" type="password" id="registerPassword" placeholder="********" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Telefon raqam</label>
        <input name="tel" type="numeric" id="confirmPassword" placeholder="+998913456789" required>
      </div>
      <button type="submit">Ro'yxatdan o'tish</button>
    </form>
    <a href="{{route('login')}}" class="link" id="showLogin">Kirish</a>
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
