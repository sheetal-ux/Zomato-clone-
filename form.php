<?php
include 'admin/db.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  
</head>
<body>

  <div class="form-container">
    <h2>Registration</h2>

    <div class="section-title">Personal Details</div>
    <div class="form-grid">
      <div>
        <label>Full Name</label>
        <input type="text" placeholder="Enter your name">
      </div>
      <div>
        <label>Date of Birth</label>
        <input type="date">
      </div>
      <div>
        <label>Email</label>
        <input type="email" placeholder="Enter your email">
      </div>
      <div>
        <label>Mobile Number</label>
        <input type="tel" placeholder="Enter mobile number">
      </div>
      <div>
        <label>Gender</label>
        <input type="text" placeholder="Enter your gender">
      </div>
      <div>
        <label>Occupation</label>
        <input type="text" placeholder="Enter occupation">
      </div>
    </div>

    <div class="section-title">Identity Details</div>
    <div class="form-grid">
      <div>
        <label>ID Type</label>
        <input type="text" placeholder="Enter ID type">
      </div>
      <div>
        <label>ID Number</label>
        <input type="text" placeholder="Enter ID number">
      </div>
      <div>
        <label>Issue Authority</label>
        <input type="text" placeholder="Enter issue department">
      </div>
      <div>
        <label>Issue Date</label>
        <input type="date">
      </div>
      <div>
        <label>Issue State</label>
        <input type="text" placeholder="Enter ID issue state">
      </div>
      <div>
        <label>Expiry Date</label>
        <input type="date">
      </div>
    </div>

    <div class="submit-btn">
      <button type="submit">Next →</button>
    </div>
  </div>
<style>

    body {
      margin: 0;
      padding: 0;
      background-color: #2d6cdf; 
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      max-width: 800px;
      width: 100%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      height: 500px;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 22px;
      color: #222;
    }

    .section-title {
      font-weight: bold;
      margin: 20px 0 10px;
      color: #444;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 20px;
    }

    label {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 5px;
      display: block;
    }

    input {
      width: 90%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      
    }

    .submit-btn {
      margin-top: 25px;
      text-align: right;
    }

    button {
      background-color: #2d6cdf;
      padding: 10px 30px;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background-color: #8f98aa;
    }
  </style>
</body>
</html>
