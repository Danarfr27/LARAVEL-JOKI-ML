@extends('backend.master')

@section('content')
    LANDING PAGE KHUSUS ADMIN
@endsection
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Jasa Joki Mobile Legend</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        font-family: Arial, sans-serif;
        display: flex;
        min-height: 100vh;
      }
      .sidebar {
        width: 250px;
        background-color: #6f0197;
        color: white;
        padding: 20px;
      }
      .logo {
        width: 100px;
        height: 100px;
        background-color: #666;
        margin-bottom: 20px;
      }
      .menu {
        list-style-type: none;
        padding: 10px;
      }
      .menu li {
        margin-bottom: 10px;
      }
      .menu a {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
      }
      .menu a i {
        margin-right: 10px;
        width: 20px;
      }
      .main-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
      }
      .top-nav {
        background-color: #6f0197;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
      }
      .top-nav a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
      }
      .dashboard-content {
        background-color: #9c0ed0;
        flex-grow: 1;
        padding: 20px;
      }
      .welcome-text {
        color: white;
        margin-bottom: 20px;
      }
      .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
      }
      .card {
        background-color: #6f0197;
        color: white;
        padding: 20px;
        border-radius: 5px;
      }
      .card-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }
      .card-header i {
        font-size: 24px;
        margin-right: 10px;
      }
      .card a {
        color: white;
        text-decoration: none;
      }
      .menu-toggle {
        display: none;
        background: none;
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
      }
      .logo {
        background-color: red;
        height: 180px;
      }
      @media (max-width: 768px) {
        body {
          flex-direction: column;
        }
        .sidebar {
          width: 100%;
          display: none;
        }
        .sidebar.active {
          display: block;
        }
        .menu-toggle {
          display: block;
          padding-right: 10px;
        }
      }
    </style>
  </head>
  <body>
    <div class="sidebar" id="sidebar">
      <!-- <div class="logo"> -->
      <!-- <img src="asset/image/logo-removebg-preview.png" alt="" style="width: 200px;"> -->
      <!-- </div> -->

      <h2>DASHBOARD</h2>
      <h3>MENU</h3>
      <ul class="menu">
        <li>
          <a href="tampilan-penjoki.html"><i class="fas fa-user"></i>PENJOKI</a>
        </li>
        <li>
          <a href="costumer.html"><i class="fas fa-users"></i>CUSTOMER</a>
        </li>
        <li>
          <a href="payment.html"
            ><i class="fas fa-credit-card"></i>PEMBAYARAN</a
          >
        </li>
        <li>
          <a href="tampilanPesanan.html"
            ><i class="fas fa-shopping-cart"></i>PESANAN</a
          >
        </li>
        <li>
          <a href="layanan.html"><i class="fas fa-book"></i>LAYANAN</a>
        </li>
        <li>
          <a href="tampilanAkun.html"><i class="fas fa-cog"></i>AKUN</a>
        </li>
      </ul>
      <ul class="menu" style="margin-top: 20px">
        <li>
          <a href="tampilanLogout.html"><i class="fas fa-sign-out-alt"></i>LOG OUT</a>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <nav class="top-nav">
        <button class="menu-toggle" id="menu-toggle">
          <i class="fas fa-bars"></i>
        </button>
        <a href="dasboard.html">Home</a>
        <a href="loginAdmin.html">Admin</a>
      </nav>
      <div class="dashboard-content">
        <h1 style="color: white">DASHBOARD</h1>
        <div class="welcome-text">
          <p>Selamat Datang,</p>
          <p><strong>Admin Jasa Joki Mobile Legend</strong></p>
        </div>
        <div class="card-grid">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-user"></i>
              <h2><a href="tampilan-penjoki.html">Penjoki</a></h2>
            </div>
            <a href="tampilan-penjoki.html">View Detail &gt;</a>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fas fa-users"></i>
              <h2><a href="costumer.html">Customer</a></h2>
            </div>
            <a href="costumer.html">View Detail &gt;</a>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fas fa-credit-card"></i>
              <h2><a href="payment.html">Pembayaran</a></h2>
            </div>
            <a href="payment.html">View Detail &gt;</a>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fas fa-envelope"></i>
              <h2><a href="tampilanPesanan.html">Pesanan</a></h2>
            </div>
            <a href="tampilanPesanan.html">View Detail &gt;</a>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fas fa-book"></i>
              <h2><a href="layanan.html">Layanan</a></h2>
            </div>
            <a href="layanan.html">View Detail &gt;</a>
          </div>
          <div class="card">
            <div class="card-header">
              <i class="fas fa-cog"></i>
              <h2><a href="tampilanAkun.html">Akun</a></h2>
            </div>
            <a href="tampilanAkun.html">View Detail &gt;</a>
          </div>
        </div>
      </div>
    </div>
    <script>
      document
        .getElementById("menu-toggle")
        .addEventListener("click", function () {
          document.getElementById("sidebar").classList.toggle("active");
        });
    </script>
  </body>
</html>
