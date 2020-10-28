<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/img/logo-fav.png">
  <title>District Website</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css' ) }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/lib/material-design-icons/css/material-design-iconic-font.min.css' ) }}" />

  @yield('styles')

  <link rel="stylesheet" href="{{ asset('public/assets/css/app.css' ) }}" type="text/css" />
</head>

<body>
  <div class="be-wrapper">
    <nav class="navbar navbar-expand fixed-top be-top-header">
      <div class="container-fluid">
        <div class="be-navbar-header"><a class="navbar-brand" href="#">
            <h2> <b>High Court</b></h2>
          </a>
        </div>
        <div class="page-title"><span></span></div>
        <div class="be-right-navbar">
          <ul class="nav navbar-nav float-right be-user-nav">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ asset('public/assets/img/avatar.png') }}" alt="Avatar"><span class="user-name">Admin</span></a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="{{ url('logout') }}"><span class="icon mdi mdi-power"></span>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
