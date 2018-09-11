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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('js/bootstrap.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/featherlight.js') }}" charset="utf-8"></script>
</head>
<body>
  <nav class="navbar navbar-inverse" id="myNav">
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
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </ul>
    </div>
  </nav>

  <div id="about-sketch"></div>

  <div class="hero-image">
    <h1 style="color: orange">ABOUT CASSIDY</h1>
    <div class="col-sm-4">
      <h5 class="text-center" style="color:orange">BACKGROUND</h5>
      <p class="text-left" style="color:white">
        <br>My name is Cassidy and I'm a web developer.
        I'm a creative person that likes to make beautiful and interactive web pages so people can enjoy both art and technology on the internet.</br>
        <br>I recently graduated from the Montana Code School as a full-stack developer. I've spent the last nineteen years of life based in my hometown of Missoula, Montana</br>
        <br>I began my adult life at the University of Montana studying international politics and learning Arabic. I've lived in Morocco and have volunteered for many organizations both at home and abroad. </br>
        <br>I've taught English overseas in several rural Chilean schools in and around the Andes.</br>
        <br>More recently, I've spent my time working full time at the Missoula Art Museum as the Visitor Engagement Curator</br>
        <br>My goals in life are to see as much as this amazing blue and green globe as possible while making valuable and lasting relationships</br>
        <br>I enjoy photography, socializing with humans and animals alike, cooking delicious meals and sharing them, binge-watching most shows, and thrifting.
      </div>
      <div class="col-sm-4">
        <h5  class="text-center" style="color:orange">SKILLS & PROCESS</h5>
        <p class"text-left" style="color:white">
          <br>I spend my free time designing and building websites using JavaScript, P5.js, and JQuery. Some of my skills include:</br>
          <li class="text-left" style="color:white">HTML5, CSS3, SASS</li>
          <li class="text-left" style="color:white">Working with JQuery plugins</li>
          <li class="text-left" style="color:white">Responsive Web Design</li>
          <li class="text-left" style="color:white">Bootstrap and Vue frameworks</li>
          <li class="text-left" style="color:white">Processing, P5.js, Paper.js, Three.js</li>
          <li class="text-left" style="color:white">Photoshop, Illustrator, Sketch</li></p>
          <p class="text-left" style="color:white">My design process starts with with a pencil and paper, scribbling ideas and concepts, thinking about the problem and the solution.
            Once I have an idea, I’ll sit down at my computer and start with low level mockups. Add imagery, typography design and details.
            <br>For development I use HTML5 and CSS3. I use SASS, P5.js for interactivity, and Laravel. These are the basic tools I use on every job and are my daily set up.
            For those interested, the text editor I use is Atom and sometimes Xcode.</br></p>
            <p class="text-left" style="color:white"><strong>I'M CURRENTLY TAKING ON FREELANCE PROJECTS.<a href="{{ route('contact') }}" style="color:green">Let's Talk</a></strong></p>
          </div>
          <img class="figureSlides" src="/images/Me.jpg"></img>
        </div>

        <script>
        function myFunction() {
          var x = document.getElementById("myNav");
          if (x.className === "navbar-inverse") {
            x.className += " responsive";
          } else {
            x.className = "navbar-inverse";
          }
        }
        </script>

        <script src="{{ asset('js/p5.js') }}" charset="utf-8"></script>
        <script type="text/javascript" src="{{ asset('js/about-sketch.js') }}" charset="utf-8"></script>
      </body>
      </html>
