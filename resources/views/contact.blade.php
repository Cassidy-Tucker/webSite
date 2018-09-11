<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>cassidy tucker</title>

  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/featherlight.css') }}">
  <script src="{{ asset('js/bootstrap.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/featherlight.js') }}" charset="utf-8"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('home') }}">Cassidy</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('social') }}">Social</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div id="contact-sketch"></div>

  <div class="content">
    <div class="title m-b-md">
      {{$heading}}
    </div>
    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
      <div class="row">
        <div class="col-sm-6">
          <p style="color:yellow">LEAVE ME A MESSAGE</p>
          <p><span class="glyphicon glyphicon-map-marker"></span>Missoula,MT,USA</p>
          <p><span class="glyphicon glyphicon-phone"></span>+1.(406).207.4135</p>
          <p><span class="glyphicon glyphicon-envelope"></span>cassidytucker60@gmail.com</p>
        </div>
      </div>
      <script src="{{ asset('js/p5.js') }}" charset="utf-8"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.22/p5.min.js"></script>
      <script type="text/javascript" src="{{ asset('js/contact-sketch.js') }}" charset="utf-8"></script>
    </div>
  </body>
  </html>
