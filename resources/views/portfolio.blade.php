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
      <div class="navbar-header" style="font-family: 'Poiret One', cursive;">
        <a class="navbar-brand" href="{{ route('home') }}">Cassidy</a>
      </div>
      <ul class="nav navbar-nav" style="font-family: 'Poiret One', cursive;">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('social') }}">Social</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="content">
    <div class="title m-b-md" style="font-family: 'Poiret One', cursive; color:orange">
      {{$heading}}
    </div>
  </div>

  <div id="portfolio-sketch"></div>

  <!-- !PAGE CONTENT! -->
  <main>
    <section class="cards">
      <article>
        <img class="article-img" src="/images/Jeux.png" alt=" " />
        <h1 class="article-title"><a href="#" style="text-decoration:none;">B Cubed</a></h1>
      </article>
      <article>
        <img class="article-img" src="/images/Dreamers.png" alt=" " />
        <h1 class="article-title"><a href="https://dreamers-mcs.herokuapp.com" style="text-decoration:none;">Dreamers</a></h1>
      </article>
      <article>
        <img class="article-img" src="/images/WindowDisplay.png" alt=" " />
        <h1 class="article-title">Window Display</h1>
      </article>
      <article>
        <img class="article-img" src="/images/BCubed.png" alt=" " />
        <h1 class="article-title"><a href="#" style="text-decoration:none;">B Cubed</a></h1>
      </article>
      <article>
        <img class="article-img" src="/images/Tago.png" alt=" " />
        <h1 class="article-title"><a href="#" style="text-decoration:none;">Tago</a></h1>
      </article>
      <article>
        <img class="article-img" src="/images/WindowDisplay2.png" alt=" " />
        <h1 class="article-title">Window Display</h1>
      </article>
    </section>
  </main>
  <!-- onclick="onClick(this)"
  alt="My role in this project was providing the creative direction for this site. Not only am I interested in front-end web development but I’m interested in elevating the experiences we as users have on the internet. I wanted to explore new and emerging technologies as well as design a fun and interactive space for our board game site.
  For the landing page, I started with a library called Paper.js to implement a Voronoi diagram. Voronoi diagrams are mostly used in science and technology but also in visual arts. Because Paper.js is a new library, the documentation was minimal and the library restrictions I encountered wouldn’t allow me to do all the features I wanted to. So, I ultimately hit a block. The landing page you see here was made using frameworks that I was more comfortable with P5.js and WEBGL technology.
  I also designed the background you see on every page of B-Cubed using P5.js. This animation is called an L-System or a Lindenmayer system, which is an algorithm that models organic growth. I tried to design a color scheme that was both playful and fun, like board games are, while also being pleasing to look at and not overbearing.
  I’m really proud of the front-end of our site because I think sometimes the front-end is sometimes seen as the ‘easy’ part of programming or overlooked at times but I was really challenged during this project and I think we all worked together really well to see our vision through. Another major hurdle that I had to endure was refactoring the entire project’s code, which meant spending days restructuring the code to better the readability and lessen the complexity. This is something that was not only tedious but also very difficult because you have to think very abstractly about what this code and project is for.
  ">
  <p style="color:white">Web Application/Social Network</p>
  <p style="color:white">Laravel, PHP, SASS, Oauth, Bootstrap, MySQL, Eloquent, TravisCI, Dusk, PHPUnit, Paper.js, P5.js, WEBGL</p
  onclick="onClick(this)"
  alt="Dreamers was a good first project to dive into React and Material UI. I spent the majority of my time on this project working with the front end design scheme and playing around with Material UI. Its a very sleek and easy to use interface and I think this project really help me see all the potential in front end design. I also came up with the core concept of the application because I have my own dream journal that I use to keep track of dreams.">
  <p style="color:white">Web Application-Mobile First</p>
  <p style="color:white">Node, Express, Mongo, React, Webpack, Mongoose, JQuery, P5.js, Three.js</p>
  onclick="onClick(this)"
  alt="We had the opportunity to make something for a client. Jay Bruns at Wave & Circuit approached us about making an interactive art display using whatever technology we wanted. He has an office and creative space on Higgins and gets a lot of foot traffic. This project was meant to be a completely experimental and used to explore the languages and platforms that digital artists use. This process had a very different approach than the sites and apps that many cohorts do, mainly because that it can be really hard to plan and assign tasks to the group. Instead, we spent the majority of time on this project in class and experimenting as a group. We had a lot of fun making this project and learned a lot about other tools. We explored mainly C++ in openFrameworks and experimenting with older gaming equipment such as XBOX Kinect. We dabbled in other technologies such as PureData, openGL, and GLSL shading technology.">
  <p style="color:white">Interactive Art Installation</p>
  <p style="color:white">openFrameworks, WEBGL, Kinect, PureData, C++</p>
  onclick="onClick(this)"
  alt="Tago was made with the thinking of events and keeping a record of where people go at an event or a place of interest such as my current workplace, an art museum. I spent my time and energy, again, on the front end concepts of a single page with two feeds, one being a live feed coming from a Raspberry Pi with live data and the other as a live analytic feed using D3.js. This was a fun project to work on and I hope to dive back into the D3 technology again for non-profit work in the future. ">
  <h4 style="font-family:'Poiret One', cursive; color:white"><strong>TAGO:</strong></h4>
  <p style="color:white">Event Management Site - Web Application</p>
  <p style="color:white">OpenCV, Python, D3.js, Mongoose, Express, JQuery, Node, MongoDB</p> -->


<script src="{{ asset('js/p5.js') }}" charset="utf-8"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.10/p5.js"></script>
<script type="text/javascript" src="{{ asset('js/portfolio-sketch.js') }}" charset="utf-8"></script>
</body>
</html>
