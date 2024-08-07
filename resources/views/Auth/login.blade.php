
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - OPRIME VERIFY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?fit=crop&w=1500&q=80') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150px;
        }
        .form-group label {
            font-weight: bold;
            color: #fff;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #28a745;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-login:hover {
            background-color: #218838;
        }
        .forgot-password, .register-link {
            text-align: center;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #ccc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="https://oprime.com.ng/mailer/wp-content/uploads/2024/04/IMG_0359.png" alt="logo">
    </div>
    <h2 class="text-center mb-4">Login</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <form action="login_now" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control" autofocus required/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <input id="password" name="password" type="password" class="form-control" required/>
                <div class="input-group-append">
                    <button id="toggle-password" class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-eye-slash"></i>
                    </button>
                </div>
            </div>
        </div> 
        <button type="submit" class="btn btn-login">Login</button>
        <div class="forgot-password">
            <a href="/forgot-password" class="text-light">Forgot password?</a>
        </div>
        <div class="register-link">
            <p>No Account yet? <a class="text-light" href="register"><strong>Register</strong></a></p>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzEYsMsFw6fXyofXPTENaC3uPSYEx2fH1pWGM0D8pqtj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QNB0rWX8gsudb2fv59HqXm5HZfs2fe7UnHDbHkQe2pY04GOQbzMSldR9G9eIflQE" crossorigin="anonymous"></script>
<script>
    document.getElementById("toggle-password").addEventListener("click", function () {
        const passwordField = document.getElementById("password");
        const passwordFieldType = passwordField.type === "password" ? "text" : "password";
        passwordField.type = passwordFieldType;
        this.querySelector("i").classList.toggle("bi-eye");
        this.querySelector("i").classList.toggle("bi-eye-slash");
    });
</script>
</body>
</html>
