<?php
include 'admin/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Securely hash the password
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // Insert into database using prepared statement
    $stmt = $conn->prepare("INSERT INTO login (email, pass) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);
    $stmt->execute();
    $stmt->close();

    // Redirect after successful login
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zomato Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <header class="navbar">
        <div class="logo-text">Zomato</div>
        <nav class="nav-links">
            <a href="index.html">Home</a>
            <a href="zomato.html">Zomato</a>
            <a href="Restaurant.html">Restaurant</a>
            <a href="orders.html">Orders</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <main class="login-wrapper">
        <section class="login-card">
            <h1 class="brand">zomato</h1>
            <h2 class="title">Login</h2>
            <p class="subtitle">Welcome back foodie!</p>

            <form action="login.php" method="post">
                <label>
                    Email or phone
                    <input type="text" name="email" required placeholder="Enter registered email / phone" />
                </label>

                <label class="password-label">
                    Password
                    <input type="password" name="pass" required placeholder="••••••••" />
                    <a href="#" class="forgot-link">Forgot?</a>
                </label>

                <button type="submit" class="primary-btn">Log in</button>
            </form>

            <p class="bottom-link">
                New to Zomato?
                <a href="#">Create account</a>
            </p>
        </section>
    </main>

    <style>
      /* Zomato-style Login Form */

.login-card {
  max-width: 400px;
  margin: 50px auto;
  padding: 2.5rem 2rem;
  background-color: #fff;
  border-radius: 14px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
  text-align: center;
  font-family: 'Poppins', sans-serif;
}

.login-card .brand {
  font-size: 2.2rem;
  font-weight: 700;
  color: #e23744;
  text-transform: uppercase;
  margin-bottom: 0.5rem;
}

.login-card .title {
  font-size: 1.5rem;
  font-weight: 600;
  margin-bottom: 0.25rem;
}

.login-card .subtitle {
  font-size: 0.9rem;
  color: #777;
  margin-bottom: 1.5rem;
}

.login-card form {
  display: flex;
  flex-direction: column;
  gap: 1.2rem;
}

.login-card label {
  text-align: left;
  font-size: 0.9rem;
  font-weight: 500;
  color: #333;
}

.login-card input[type="text"],
.login-card input[type="password"] {
  width: 100%;
  padding: 0.8rem 1rem;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 1rem;
  transition: all 0.25s;
}

.login-card input:focus {
  border-color: #e23744;
  outline: none;
  box-shadow: 0 0 0 3px rgba(226, 55, 68, 0.1);
}

.password-label {
  position: relative;
}

.forgot-link {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.8rem;
  color: #e23744;
}

.forgot-link:hover {
  text-decoration: underline;
}

.primary-btn {
  background-color: #e23744;
  color: white;
  padding: 0.9rem;
  font-size: 1rem;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.primary-btn:hover {
  background-color: #c81d2a;
}

.bottom-link {
  font-size: 0.9rem;
  margin-top: 1.5rem;
  color: #555;
}

.bottom-link a {
  color: #e23744;
  text-decoration: none;
  font-weight: 500;
}

.bottom-link a:hover {
  text-decoration: underline;
}
</style>